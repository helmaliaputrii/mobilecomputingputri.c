<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class dosenseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn'=> "120222",
            'nama'=> 'dosen matdis',
            'alamat'=> 'padang utara',
            'no_hp'=> '081267309812',
        ]);
        //
    }
}
