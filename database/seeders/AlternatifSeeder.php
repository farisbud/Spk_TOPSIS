<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alternatif;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternatif::create([
            'nik' => 'muhammad',
            'nama_pegawai' => 'muhammad',
            'telepon' => '0892232321',
            'email' => 'coba@gmail.com',

        ]);
        Alternatif::create([
            'nik' => 'user1',
            'nama_pegawai' => 'user1',
            'telepon' => '023232323',
            'email' => 'coba1@gmail.com',
        ]);
        //
    }
}
