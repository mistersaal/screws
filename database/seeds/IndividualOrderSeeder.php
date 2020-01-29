<?php

use Illuminate\Database\Seeder;

class IndividualOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('individual_orders')->insert([
            [
                'amount' => 50,
                'name' => 'Stepan',
                'phone' => '+70000000000',
                'email' => 'mister.saal@yandex.ru',
                'color' => 'Белые',
                'length' => 41,
                'manufacturer' => 'СаморезПро',
                'type' => 'ГМ'
            ]
        ]);
    }
}
