<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i < 10; $i++) {
            Member::create([
                'no_ktp' => fake()->randomNumber(9),
                'nama' => fake()->name(),
                'alamat' => fake()->address(),
                'no_hp' => fake()->phoneNumber(),
                'email' => fake()->safeEmail(),
                'username' => fake()->userName(),
                'password' => bcrypt('123456789'),
                'foto_ktp' => '/dummy',
                'status' => array_rand([0, 1, 2])
            ]);
        }
    }
}
