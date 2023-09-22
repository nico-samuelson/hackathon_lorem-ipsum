<?php

namespace App\Http\Controllers;

use App\Models\Kambing;
use Illuminate\Http\Request;
use App\Http\Controllers\KambingController;

class AddKambingController extends Controller
{
    public $kambingController;

    public function __construct()
    {
        $this->kambingController = new KambingController(new Kambing());
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
}
