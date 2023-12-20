<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class relationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'mahasiswa_npm'=> "2201170069",
            'dosen_nidn'=> '120222',
            'matakuliah_kode'=> '212121',
            'status'=> 'Y',
        ]);
        //
    }
}
