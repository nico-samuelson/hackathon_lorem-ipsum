<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\InspekturController;
use App\Models\Inspektur;
use App\Models\KambingDetail;

class MemberController extends BaseController
{
    public function __construct(Member $model)
    {
        parent::__construct($model);
    }

    public function login() {
        // $req = new Request();
        // $this->store($req->merge([
        //     'no_ktp' => '1234567890',
        //     'nama' => "Nico",
        //     'alamat' => 'woyyyy',
        //     'no_hp' => '123456789',
        //     'email' => 'nico@gmail.com',
        //     'password' => bcrypt('123456789'),
        //     'foto_ktp' => '/dummy',
        //     'status' => 1,
        // ]));
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
                return redirect()->route('home');
            } 
        } 
        else if (count($admin) > 0) {
            if (password_verify($request->password, $admin[0]->password) && $admin[0]->status == 0) {
                session(['id_user' => $admin[0]->id]);
                session(['email' => $admin[0]->email]);
                session(['nama' => $admin[0]->nama]);
                return redirect()->route('dashboard');
            } 
        }

        return redirect()->back()->with('error', 'Username atau Password ditemukan');
    }

    public function logout() {
        session()->flush();
        return redirect()->route('home');
    }

    public function dashboard() {
        $kambingDetail = new KambingDetailController(new KambingDetail());

        dd($kambingDetail->getAll(['member_id' => session('id_user')]));

        return view('member_dashboard', [
            'title' => 'Member Dashboard',
            'kambing' => $kambingDetail->getAll(['id_member' => session('id_user')])
        ]);
    }
}