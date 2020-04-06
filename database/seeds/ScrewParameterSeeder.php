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
                'is_standard_field' => true,
                'is_select_form' => false,
            ],
            [
                'name' => 'Диаметр',
                'is_standard_field' => true,
                'is_select_form' => true,
            ],
            [
                'name' => 'Длина',
                'is_standard_field' => false,
                'is_select_form' => true,
            ],
            [
                'name' => 'Производитель',
                'is_standard_field' => false,
                'is_select_form' => false,
            ],
            [
                'name' => 'Паз',
                'is_standard_field' => true,
                'is_select_form' => false,
            ],
            [
                'name' => 'Наконечник',
                'is_standard_field' => true,
                'is_select_form' => false,
            ],
            [
                'name' => 'Тип головки',
                'is_standard_field' => true,
                'is_select_form' => false,
            ],
        ]);
    }
}
