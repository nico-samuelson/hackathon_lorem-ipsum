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
        $ktp = ['_639f77c9-4804-4ec7-886f-1df5c547789b.jpeg', '_639f77c9-4804-4ec7-886f-1df5c547789b.jpeg', 'KTP_1234_e4b22f30889d2c95d490605862532b41.png', 'Picture1.png', 'ᨳUmibe no Étranger - paisagem do céu com nuvens, a noite (aesthetic) _ Cenário anime, Fotografia deslumbrante, Fundo de animação.jpeg'];

        for($i=0; $i < 10; $i++) {
            Member::create([
                'no_ktp' => fake()->randomNumber(9),
                'nama' => fake()->name(),
                'alamat' => fake()->address(),
                'no_hp' => fake()->phoneNumber(),
                'email' => fake()->safeEmail(),
                'username' => fake()->userName(),
                'password' => bcrypt('123456789'),
                'foto_ktp' => $ktp[array_rand($ktp)],
                'status' => 1,
            ]);
        }
    }
}
