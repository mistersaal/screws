<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_types')->insert([
            [
                'name' => 'Гипсокартон дерево',
                'screw_type_of_head_id' => 1,
                'screw_color_id' => 3,
                'screw_tip_id' => 1,
                'screw_diameter_id' => 2,
                'screw_slot_id' => 1,
            ],
            [
                'name' => 'Гипсокартон металл',
                'screw_type_of_head_id' => 1,
                'screw_color_id' => 3,
                'screw_tip_id' => 2,
                'screw_diameter_id' => 2,
                'screw_slot_id' => 1,
            ],
            [
                'name' => 'Гипсоволокно',
                'screw_type_of_head_id' => 1,
                'screw_color_id' => 3,
                'screw_tip_id' => 1,
                'screw_diameter_id' => 3,
                'screw_slot_id' => 1,
            ],
        ]);
    }
}
