<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screws')->insert([
            [
                'screw_config_id' => 1,
                'screw_length_id' => 3,
                'screw_manufacturer_id' => 1,
            ],
            [
                'screw_config_id' => 2,
                'screw_length_id' => 4,
                'screw_manufacturer_id' => 2,
            ],
            [
                'screw_config_id' => 3,
                'screw_length_id' => 5,
                'screw_manufacturer_id' => 3,
            ]
        ]);
        DB::table('screws')->insert(
            [
                'screw_config_id' => 1,
                'screw_length_id' => 4,
                'screw_manufacturer_id' => 3,
                'visible' => false
            ]
        );
    }
}
