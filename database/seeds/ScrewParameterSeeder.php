<?php

use Illuminate\Database\Seeder;

class ScrewParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ScrewParameter::insert([
            [
                'name' => 'Покрытие',
                'string_id' => 'color',
                'is_select_form' => false,
            ],
            [
                'name' => 'Диаметр',
                'string_id' => 'diameter',
                'is_select_form' => true,
            ],
            [
                'name' => 'Длина',
                'string_id' => 'length',
                'is_select_form' => true,
            ],
            [
                'name' => 'Производитель',
                'string_id' => 'manufacturer',
                'is_select_form' => false,
            ],
            [
                'name' => 'Паз',
                'string_id' => 'slot',
                'is_select_form' => false,
            ],
            [
                'name' => 'Наконечник',
                'string_id' => 'tip',
                'is_select_form' => false,
            ],
            [
                'name' => 'Тип головки',
                'string_id' => 'type_of_head',
                'is_select_form' => false,
            ],
        ]);
    }
}
