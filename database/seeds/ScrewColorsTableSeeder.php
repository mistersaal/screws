<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_colors')->insert([
            ['name' => 'Белые'],
            ['name' => 'Чёрные'],
            ['name' => 'Золотые']
        ]);
    }
}
