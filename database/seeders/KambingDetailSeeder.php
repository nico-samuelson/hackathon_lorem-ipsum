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
        for($i = 0; $i < 100; $i++) {
            KambingDetail::create([
                'id_kambing' => $kambings[$i]->id,
                'member_id' => array_rand($members->toArray()),
                'file_kontrak' => '/kontrak',
                'file_kontrak_signed' => '/kontrak_signed',
            ]);
        };
    }
}