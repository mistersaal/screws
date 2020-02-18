<?php

use Illuminate\Database\Seeder;

class ScrewTypesOfHeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_types_of_head')->insert([
            ['name' => 'Потайная'],
            ['name' => 'Полупотайная'],
        ]);
    }
}
