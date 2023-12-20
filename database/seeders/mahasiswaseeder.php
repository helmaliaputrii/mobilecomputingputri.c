<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm'=> "2201170069",
            'nama'=> 'mahasiswa69',
            'alamat'=> 'padang utara',
            'no_hp'=> '083167200891',
        ]);
        //
    }
}
