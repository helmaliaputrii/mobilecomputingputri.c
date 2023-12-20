<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=> "Helmaliaputri",
            'email'=> 'helmaliaptri0@gmail.com',
            'password'=> hash::make('12345678'),
            //'level'=> 'admin',
        ]);
        //
    }
}
