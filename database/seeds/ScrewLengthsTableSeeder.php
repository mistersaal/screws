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
            ['name' => 25],
            ['name' => 41],
            ['name' => 55]
        ]);
    }
}
