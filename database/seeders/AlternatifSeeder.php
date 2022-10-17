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
            'nik' => '340202020220',
            'nama_pegawai' => 'mamat',
            'telepon' => '0892232322',
            'email' => 'coba3@gmail.com',

        ]);
        Alternatif::create([
            'nik' => '34020522323232',
            'nama_pegawai' => 'surya',
            'telepon' => '0232328324',
            'email' => 'coba2@gmail.com',
        ]);
        //
    }
}
