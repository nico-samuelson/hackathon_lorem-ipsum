<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Kambing;
use App\Models\Inspektur;
use Illuminate\Http\Request;
use App\Models\KambingDetail;
use App\Models\CheckingHistory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\KambingController;
use App\Http\Controllers\InspekturController;
use App\Http\Controllers\KambingDetailController;
use Exception;
use Illuminate\Support\Facades\Storage;

class MemberController extends BaseController
{
    protected $kambingDetail;

    public function __construct(Member $model)
    {
        parent::__construct($model);
        $this->kambingDetail = new KambingDetailController(new KambingDetail());
    }

    public function login() {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function login_process(Request $request) {
        $inspekturController = new InspekturController(new Inspektur());
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = $inspekturController->getAll(['username' => $request->username]);
        $user = $this->getAll(['username' => $request->username]);

        if (count($user) > 0) {
            if (password_verify($request->password, $user[0]->password) && $user[0]->status == 1) {
                session(['id_user' => $user[0]->id]);
                session(['email' => $user[0]->email]);
                session(['nama' => $user[0]->nama]);
                session(['isInspektur' => false]);
                return redirect()->route('home');
            } 
        } 
        else if (count($admin) > 0) {
            if (password_verify($request->password, $admin[0]->password) && $admin[0]->status == 0) {
                session(['id_user' => $admin[0]->id]);
                session(['email' => $admin[0]->email]);
                session(['nama' => $admin[0]->nama]);
                session(['isInspektur' => true]);
                return redirect()->route('dashboard');
            } 
        }

        return redirect()->back()->with('error', 'Username atau Password invalid!');
    }

    public function logout() {
        session()->flush();
        return redirect()->route('home');
    }

    public function dashboard() {
        $history = new CheckingHistory();
        $kambing = $this->kambingDetail->getAll(['member_id' => session('id_user'), 'status' => 1]);

        $jumlahKontrak = array_unique($kambing->pluck('file_kontrak_signed')->toArray());
        $histories = $history->whereIn('kambing_id', $kambing->pluck('kambing_id'))->orderBy('updated_at', 'desc')->get();
        
        return view('member.dashboard', [
            'title' => 'Member Dashboard',
            'kambing' => $kambing,
            'jumlahKontrak' => $jumlahKontrak,
            'histories' => $histories
        ]);
    }

    public function kambing() {
        $kambingDetail = new KambingDetailController(new KambingDetail());

        return view('member.kambing', [
            'title' => 'Detail Kambing',
            'kambing' => $kambingDetail->getAll(['member_id' => session('id_user'), 'status' => 1])
        ]);
    }

    public function kontrak() {
        $kambingDetail = new KambingDetail();
        $kontrak = $kambingDetail->select('file_kontrak', 'file_kontrak_signed')->distinct()->where('member_id', session('id_user'))->orderBy('file_kontrak_signed', 'asc')->get();


        return view('member.kontrak', [
            'title' => 'Detail Kontrak',
            'kontrak' => $kontrak,
        ]);
    }

    public function upload_kontrak(Request $request) {
        $request->validate([
            'file_kontrak' => 'required',
            'file_kontrak_signed' => 'required|file|mimes:pdf'
        ]);

        $file = $request->file('file_kontrak_signed');
        $hash = md5($file->getClientOriginalName().time());
        $fileName = "SIGNED_KONTRAK_".$request['nama']."_".$hash.".".$file->getClientOriginalExtension();

        DB::beginTransaction();
        
        try {
            $fileName = $file->storePubliclyAs('kontrak_signed/',$fileName,'public');
            if (!$fileName) {
                return back()->with('error', 'Kesalahan dalam mengupload kontrak!');
            }
            $validated['file_kontrak_signed'] = $fileName;
            $kdModel = new KambingDetail();
            $k = $kdModel->where('file_kontrak', $request->file_kontrak)->get();

            foreach($k as $kam) {
                $kdModel->where('id', $kam->id)->update(['file_kontrak_signed' => $fileName]);
            }

            DB::commit();

            return redirect()->route('member.kontrak')->with('success', 'Kontrak berhasil diunggah!');
        }
        catch (Exception $e) {
            DB::rollback();
            Storage::delete($fileName);
            return back()->with('error', 'Kesalahan dalam mengupload kontrak!');
        }
    }
}