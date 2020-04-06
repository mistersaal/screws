<?php

use Illuminate\Database\Seeder;

class ScrewParameterValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ScrewParameter::find(1)->values()->createMany([
            ['value' => 'Белый цинк'],
            ['value' => 'Жёлтый цинк'],
            ['value' => 'Оксидированный']
        ]);
        \App\ScrewParameter::find(2)->values()->createMany([
            ['value' => 3.0],
            ['value' => 3.5],
            ['value' => 3.9],
            ['value' => 4.0],
            ['value' => 4.2],
            ['value' => 4.5],
        ]);
        \App\ScrewParameter::find(3)->values()->createMany([
            ['value' => 13],
            ['value' => 16],
            ['value' => 19],
            ['value' => 25],
            ['value' => 28],
            ['value' => 32],
            ['value' => 35],
            ['value' => 38],
            ['value' => 41],
            ['value' => 45],
            ['value' => 51],
            ['value' => 55],
            ['value' => 60],
            ['value' => 64],
            ['value' => 65],
            ['value' => 70],
            ['value' => 75],
        ]);
        \App\ScrewParameter::find(4)->values()->createMany([
            ['value' => 'Россия'],
            ['value' => 'Китай'],
            ['value' => 'Европа'],
        ]);
        \App\ScrewParameter::find(5)->values()->createMany([
            ['value' => 'PH2'],
            ['value' => 'PZ2'],
        ]);
        \App\ScrewParameter::find(6)->values()->createMany([
            ['value' => 'Остриё'],
            ['value' => 'Сверло'],
        ]);
        \App\ScrewParameter::find(7)->values()->createMany([
            ['value' => 'Потайная'],
            ['value' => 'Полупотайная'],
        ]);
    }
}
