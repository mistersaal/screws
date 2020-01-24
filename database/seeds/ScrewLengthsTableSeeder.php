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
            ['value' => 25],
            ['value' => 41],
            ['value' => 55]
        ]);
    }
}
