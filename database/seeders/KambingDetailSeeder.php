<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Kambing;
use App\Models\KambingDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KambingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kambings = Kambing::all();
        $members = Member::all()->pluck('id');
        // dd($members);
        for($i = 0; $i < 100; $i++) {
            KambingDetail::create([
                'kambing_id' => $kambings[$i]->id,
                'member_id' => $members[array_rand($members->toArray())],
                'file_kontrak' => '/kontrak' . fake()->randomNumber(),
                'file_kontrak_signed' => array_rand(['/kontrak-signed' => 0, null => 1]),
                'status' => array_rand([0, 1]),
            ]);
        };
    }
}