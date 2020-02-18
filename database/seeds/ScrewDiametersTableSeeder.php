<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewDiametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_diameters')->insert([
            ['name' => 3.0],
            ['name' => 3.5],
            ['name' => 3.9],
            ['name' => 4.0],
            ['name' => 4.2],
            ['name' => 4.5],
        ]);
    }
}
