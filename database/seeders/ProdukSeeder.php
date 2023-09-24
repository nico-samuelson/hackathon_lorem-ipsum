<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            [
                'nama' => 'Susu Kambing',
                'harga' => 'Rp. 15.000',
                'deskripsi' => 'Susu asli hasil perah kambing. Enak sehat dan lebih sehat daripada Susu Sapi.',
                'foto' => 'FOTO_PRODUK_Susu Kambing_2c6488f4b81f344f8474f9a7a6bf4bcf.jpg',
            ],
            [
                'nama' => 'Susu Bubuk',
                'harga' => 'Rp. 20.000',
                'deskripsi' => 'Susu bubuk cap Kambing. Enak sehat dan bergizi!',
                'foto' => 'FOTO_PRODUK_Susu Bubuk_1aa78db3abd99b6198c440189d4d3c82.jpg',
            ],
            [
                'nama' => 'Es Krim',
                'harga' => 'Rp. 17.500',
                'deskripsi' => 'Es krim menyegarkan dan sehat dengan menggunakan susu kambing',
                'foto' => 'FOTO_PRODUK_Es Krim_f630904a40a5289b41364dd9717f4357.jpg',
            ],
        ];
        foreach($produk as $p){
            \App\Models\Produk::create($p);
        }
    }
}
