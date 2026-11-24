<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert (
            [
                'nama' => 'Putra Aditama',
                'nim' => 13242520063,
                'prodi' => 'Teknologi Informasi',
                'email' => 'Putra@gmail.com',
                'nohp' => 6208463534234,
                'foto' => 'foto/putra.jpg',
            ]
        );

        Mahasiswa::create([
            'nama' => 'Aditama',
            'nim' => 13242520033,
            'prodi' => 'Teknologi Informasi',
            'email' => 'Putri@gmail.com',
            'nohp' => 628463534104,
            'foto' => 'foto/putr.jpg',
        ]);
    }
}
