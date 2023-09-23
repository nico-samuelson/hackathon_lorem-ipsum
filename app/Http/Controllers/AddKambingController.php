<?php

namespace App\Http\Controllers;

use App\Models\Kambing;
use Illuminate\Http\Request;
use App\Http\Controllers\KambingController;
use App\Models\CheckingHistory;
use App\Http\Controllers\CheckingHistoryController;
use Illuminate\Support\Facades\Validator;

class AddKambingController extends Controller
{
    public $kambingController;
    public $checkingHistoryController;

    public function __construct()
    {
        $this->kambingController = new KambingController(new Kambing());
        $this->checkingHistoryController = new CheckingHistoryController(new CheckingHistory());
    }
    public function addKambingView()
    {
        $data = ['title' => 'Add Kambing'];
        return view('add-kambing', $data);
    }

    public function store(Request $request)
    {
        $store = $this->kambingController->store($request);
        if(isset($store['error'])) {
            return $store;
        }else{
            return ['status' => 'success', 'message' => 'Kambing berhasil ditambahkan!'];
        }
    }

    public function inspeksiKambingView()
    {
        $data = ['title' => 'Inspeksi Kambing'];
        $kambing = $this->kambingController->getAll();
        $arr = [];
        foreach($kambing as $k){
            $arr[] = [
                "no_kambing" => $k['no_kambing'],
                "id" => $k['id']
            ];
        }
        $data['kambing'] = $arr;
        return view('inspeksi-kambing', $data);
    }

    public function inspeksiKambingProses(Request $request)
    {
        if(session('isInspektur')){
            $request['inspektur_id'] = session('id_user');

            $valid = Validator::make(['foto' => $request['foto_kambing']],
            [
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'foto.required' => 'Tolong masukkan Foto Kambing!',
                'foto.image' => 'Foto Kambing dalam bentuk gambar!',
                'foto.mimes' => 'Foto Kambing dalam bentuk jpeg,png,jpg!',
                'foto.max' => 'Foto Kambing maksimal 2MB!',
            ]);

            // file upload foto kambing
            $file = $request->file('foto_kambing');
            $hash = md5($file->getClientOriginalName().time());
            $fileName = "FOTO_KAMBING_".$request['kambing_id']."_".$hash.".".$file->getClientOriginalExtension();
            if(!$file->storePubliclyAs('images/foto_kambing',$fileName,'public')){
                return ['error' => 'Gagal menyimpan foto Kambing!'];
            }
            $request['foto'] = $fileName;
            // dd($request);
            $store = $this->checkingHistoryController->store($request);
            if(isset($store['error'])) {
                $this->kambingController->updatePartial(['hamil' => $request['hamil']], $request['kambing_id']);
                return $store;
            }else{
                return ['status' => 'success', 'message' => 'Kambing berhasil diinspeksi!'];
            }
        }else{
            return ['error' => ['Anda tidak memiliki akses untuk mengakses halaman ini!']];
        }
    }
}
