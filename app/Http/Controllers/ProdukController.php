<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends BaseController
{
    public function __construct(Produk $model)
    {
        parent::__construct($model);
    }

    /*
        Add new controllers
        OR
        Override existing controller here...
    */
    public function addProdukView()
    {
        $data = ['title' => 'Add Produk'];
        return view('add-produk', $data);
    }

    public function addProdukProses(Request $request)
    {
        if(session('isInspektur')){
            $valid = Validator::make(['foto' => $request['foto_produk']],
            [
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'foto.required' => 'Tolong masukkan Foto Kambing!',
                'foto.image' => 'Foto Kambing dalam bentuk gambar!',
                'foto.mimes' => 'Foto Kambing dalam bentuk jpeg,png,jpg!',
                'foto.max' => 'Foto Kambing maksimal 2MB!',
            ]);

            if($valid->fails()){
                return ['error' => $valid->errors()->first()];
            }

            // file upload foto kambing
            $file = $request->file('foto_produk');
            $hash = md5($file->getClientOriginalName().time());
            $fileName = "FOTO_PRODUK_".$request['nama']."_".$hash.".".$file->getClientOriginalExtension();
            if(!$file->storePubliclyAs('images/foto_produk',$fileName,'public')){
                return ['error' => 'Gagal menyimpan foto Produk!'];
            }
            $request['foto'] = $fileName;

            // dd($request);
            $store = $this->store($request);
            if(isset($store['error'])) {
                return $store;
            }else{
                return ['status' => 'success', 'message' => 'Kambing berhasil diinspeksi!'];
            }
        }else{
            return ['error' => ['Anda tidak memiliki akses untuk mengakses halaman ini!']];
        }
    }
}