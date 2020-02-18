<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screw_configs')->insert([
            [
                'type' => 'Гипсокартон дерево',
                'individual' => false,
                'screw_type_of_head_id' => 1,
                'screw_color_id' => 3,
                'screw_tip_id' => 1,
                'screw_diameter_id' => 2,
                'screw_slot_id' => 1,
            ],
            [
                'type' => 'Гипсокартон металл',
                'individual' => false,
                'screw_type_of_head_id' => 1,
                'screw_color_id' => 3,
                'screw_tip_id' => 2,
                'screw_diameter_id' => 2,
                'screw_slot_id' => 1,
            ],
            [
                'type' => 'Гипсоволокно',
                'individual' => false,
                'screw_type_of_head_id' => 1,
                'screw_color_id' => 3,
                'screw_tip_id' => 1,
                'screw_diameter_id' => 3,
                'screw_slot_id' => 1,
            ],
        ]);
    }
}
