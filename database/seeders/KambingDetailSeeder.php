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
        $unsigned = ['KONTRAK_Christopher Julius Limantoro_d2de52f0f8c00355acf0496f1bbd7b8e..pdf', 'KONTRAK_dcr_d2de52f0f8c00355acf0496f1bbd7b8e.pdf'];
        // dd($members);
        for($i = 0; $i < 20; $i++) {
            KambingDetail::create([
                'kambing_id' => $kambings[$i]->id,
                'member_id' => $members[array_rand($members->toArray())],
                'file_kontrak' => $unsigned[array_rand($unsigned)],
                'file_kontrak_signed' => 'SIGNED_KONTRAK__d5a593388d284831e2eda50261a43f9e.pdf',
                'status' => 1,
            ]);
        };
    }
}