<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'screw_id' => 1,
                'amount' => 50,
                'name' => 'Stepan',
                'phone' => '+70000000000',
                'email' => 'mister.saal@yandex.ru',
                'price' => 1000,
                'is_paid' => false,
                'is_done' => false,
                'is_received' => false
            ],
            [
                'screw_id' => 2,
                'amount' => 20,
                'name' => 'Felix',
                'phone' => '+70000000000',
                'email' => 'skilef@yandex.ru',
                'price' => 400,
                'is_paid' => true,
                'is_done' => false,
                'is_received' => false
            ],
            [
                'screw_id' => 3,
                'amount' => 100,
                'name' => 'Stas',
                'phone' => '+70000000000',
                'email' => 'valsinats@yandex.ru',
                'price' => 2000,
                'is_paid' => true,
                'is_done' => true,
                'is_received' => false
            ],
            [
                'screw_id' => 4,
                'amount' => 50,
                'name' => 'Helen',
                'phone' => '+70000000000',
                'email' => 'lena-saal@yandex.ru',
                'price' => 1000,
                'is_paid' => true,
                'is_done' => true,
                'is_received' => true
            ],
        ]);
    }
}
