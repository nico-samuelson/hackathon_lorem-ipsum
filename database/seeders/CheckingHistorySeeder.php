<?php

namespace Database\Seeders;

use App\Models\Kambing;
use App\Models\CheckingHistory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CheckingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kambing = Kambing::all()->pluck('id');
        $inspektur = Insepkur::all()->pluck('id');

        for($i = 0; $i < 200; $i++) {
            CheckingHistory::create([
                'kambing_id' => array_rand($kambing->toArray()),
                'inspektur_id' => array_rand($inspektur->toArray()),
                'status' => array_rand([0, 1]),
                'keterangan' => fake()->sentence(),
            ]);
        }
    }
}