<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;

class DaftarMemberController extends Controller
{
    public $memberController;
    public function __construct()
    {
        $this->memberController = new MemberController(new Member());
    }
    public function index()
    {
        $data['title'] = "Daftar Member";

        return view('daftar-member',$data);
    }

    public function proses(Request $request)
    {

        $request['password'] = bcrypt($request['password']);
        $valid = Validator::make(['file' => $request['ktp']],[
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'file.required' => 'Tolong masukkan Foto KTP!',
            'file.image' => 'Foto KTP dalam bentuk gambar!',
            'file.mimes' => 'Foto KTP dalam bentuk jpeg,png,jpg!',
            'file.max' => 'Foto KTP maksimal 2MB!',
        ]);
        if($valid->fails()){
            return ['error' => $valid->errors()->first()];
        }

        // Safe KTP File
        $file = $request->file('ktp');
        $hash = md5($file->getClientOriginalName().time());
        $fileName = "KTP_".$request['no_ktp']."_".$hash.$file->getClientOriginalExtension();
        if(!$file->storePubliclyAs('images/ktp',$fileName,'public')){
            return ['error' => 'Gagal menyimpan foto KTP!'];
        }
        $request['foto_ktp'] = $fileName;
        // dd($request['foto_ktp']);
        $return = $this->memberController->store($request);
        // dd($return);
        if(!isset($return['error'])){
            return ['success' => 'Berhasil mendaftar!'];
        }else{
            return ['error' => 'Gagal mendaftar!'];
        }
    }
}
