<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewLengthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_lengths')->insert([
            ['name' => 13],
            ['name' => 16],
            ['name' => 19],
            ['name' => 25],
            ['name' => 28],
            ['name' => 32],
            ['name' => 35],
            ['name' => 38],
            ['name' => 41],
            ['name' => 45],
            ['name' => 51],
            ['name' => 55],
            ['name' => 60],
            ['name' => 64],
            ['name' => 65],
            ['name' => 70],
            ['name' => 75],
        ]);
    }
}
