<?php

namespace Database\Seeders;

use App\Models\Kambing;
use App\Models\Inspektur;
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
        $inspektur = Inspektur::all()->pluck('id');
        $history  = ['5cps _ Landscape wallpaper, Scenery wallpaper, Scenery.jpeg', 'download.jpeg', 'India_Farming.jpg'];

        for($i = 0; $i < 100; $i++) {
            CheckingHistory::create([
                'kambing_id' => $kambing[array_rand($kambing->toArray())],
                'inspektur_id' => $inspektur[array_rand($inspektur->toArray())],
                'status' => array_rand([0, 1]),
                'keterangan' => fake()->sentence(),
                'foto' => $history[array_rand($history)],
            ]);
        }
    }
}