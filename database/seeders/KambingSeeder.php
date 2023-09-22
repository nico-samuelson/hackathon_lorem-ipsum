<?php

namespace Database\Seeders;

use App\Models\Kambing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KambingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 100; $i++) {
            Kambing::create([
                'gender' => array_rand([0, 1]),
                'tanggal_lahir' => fake()->date(),
                'no_kambing' => $i + 1,
                'hamil' => array_rand([0, 1]),
            ]);
        }
    }
}
