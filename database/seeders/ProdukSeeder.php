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
                'nama' => 'Susu Kambing Etawa',
                'harga' => 'Rp. 20.000',
                'deskripsi' => 'Susu kambing etawa adalah susu yang dihasilkan oleh kambing etawa. Susu kambing etawa memiliki kandungan gizi yang lebih tinggi dibandingkan dengan susu sapi. Susu kambing etawa memiliki kandungan kalsium, protein, dan vitamin yang lebih tinggi dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan lemak yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan kolesterol yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan laktosa yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan asam lemak yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan mineral yang lebih tinggi dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan vitamin yang lebih tinggi dibandingkan dengan susu sapi.',
                'foto' => 'https://www.ayobandung.com/images-bandung/post/articles/2020/04/29/104795/susu-kambing-etawa.jpg',
            ],
            [
                'nama' => 'Susu Bubuk Kambing Etawa',
                'harga' => 'Rp. 25.000',
                'deskripsi' => 'Susu kambing etawa adalah susu yang dihasilkan oleh kambing etawa. Susu kambing etawa memiliki kandungan gizi yang lebih tinggi dibandingkan dengan susu sapi. Susu kambing etawa memiliki kandungan kalsium, protein, dan vitamin yang lebih tinggi dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan lemak yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan kolesterol yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan laktosa yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan asam lemak yang lebih rendah dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan mineral yang lebih tinggi dibandingkan dengan susu sapi. Susu kambing etawa juga memiliki kandungan vitamin yang lebih tinggi dibandingkan dengan susu sapi.',
                'foto' => 'https://www.ayobandung.com/images-bandung/post/articles/2020/04/29/104795/susu-kambing-etawa.jpg',
            ],
        ];
        foreach($produk as $p){
            \App\Models\Produk::create($p);
        }
    }
}
