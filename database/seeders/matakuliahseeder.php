<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class matakuliahseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliahs')->insert([
            'kode_mk'=> "212121",
            'nama_mk'=> 'matematika diskrit',
            'sks'=> '3',
            'semester'=> 'ganjil',
        ]);
        //
    }
}
