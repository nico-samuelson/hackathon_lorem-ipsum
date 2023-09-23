<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\ProdukController;

class PesanController extends Controller
{
    public $produk;
    public function __construct()
    {
        $this->produk = new ProdukController(new Produk());
    }
    public function index()
    {
        $produk = $this->produk->getAll()->toArray();
        $data = [
            'title' => 'Pesan Kuy!!'
        ];
        $data = array_merge($data,['produk' => $produk]);
        $data['isLoggedIn'] = !!session('id_user');
        return Inertia::render('Pesan',$data);
    }
}
