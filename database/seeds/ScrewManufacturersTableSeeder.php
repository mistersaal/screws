<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_manufacturers')->insert([
            ['name' => 'Standers', 'visible' => true],
            ['name' => 'Proffix', 'visible' => true],
            ['name' => 'Dewalt', 'visible' => true],
            ['name' => 'DELETED', 'visible' => false]
        ]);
    }
}
