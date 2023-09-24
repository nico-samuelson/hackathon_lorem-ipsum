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
        for($i = 0; $i < 20; $i++) {
            Kambing::create([
                'gender' => array_rand([0, 1]),
                'tanggal_lahir' => fake()->dateTimeBetween('-15 years', '-1 week'),
                'no_kambing' => $i + 1,
                'hamil' => array_rand([0, 1]),
            ]);
        }
    }
}
