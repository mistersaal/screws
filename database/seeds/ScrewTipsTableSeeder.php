<?php

use Illuminate\Database\Seeder;

class ScrewTipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_tips')->insert([
            ['name' => 'Остриё'],
            ['name' => 'Сверло'],
        ]);
    }
}
