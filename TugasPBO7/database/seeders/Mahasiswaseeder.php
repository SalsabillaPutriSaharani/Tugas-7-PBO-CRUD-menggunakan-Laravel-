<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama'  => 'Salsabilla Putri Saharani',
            'nim' => '20051214012',
            'jeniskelamin' => 'Perempuan',
            'alamat' => 'Ngampel, Manyar, Gresik',
            'kota' => 'Gresik',
            'email' => 'salsabilla@mhs.unesa.ac.id'
        ]);
    }
}
