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
                'screw_type_id' => 1,
                'screw_color_id' => 1,
                'screw_manufacturer_id' => 1,
                'screw_length_id' => 3,
                'amount' => 125,
                'cost' => 50
            ],
            [
                'screw_type_id' => 2,
                'screw_color_id' => 2,
                'screw_manufacturer_id' => 3,
                'screw_length_id' => 1,
                'amount' => 0,
                'cost' => 120
            ],
            [
                'screw_type_id' => 1,
                'screw_color_id' => 3,
                'screw_manufacturer_id' => 2,
                'screw_length_id' => 2,
                'amount' => 1000,
                'cost' => 80
            ],
        ]);
    }
}
