<?php

use Illuminate\Database\Seeder;

class ScrewSlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_slots')->insert([
            ['name' => 'PH2'],
            ['name' => 'PZ2'],
        ]);
    }
}
