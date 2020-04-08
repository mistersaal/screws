<?php

use Illuminate\Database\Seeder;

class ScrewConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfHeadValues = \App\ScrewParameter::firstWhere('name', 'Тип головки')->values;
        $colorValues = \App\ScrewParameter::firstWhere('name', 'Покрытие')->values;
        $tipValues = \App\ScrewParameter::firstWhere('name', 'Наконечник')->values;
        $diameterValues = \App\ScrewParameter::firstWhere('name', 'Диаметр')->values;
        $slotValues = \App\ScrewParameter::firstWhere('name', 'Паз')->values;

        $length = \App\ScrewParameter::firstWhere('name', 'Длина');
        $manufacturer = \App\ScrewParameter::firstWhere('name', 'Производитель');
        $tip = \App\ScrewParameter::firstWhere('name', 'Наконечник');

        $config = App\ScrewConfig::create([
            'name' => 'Гипсокартон дерево'
        ]);
        $config->parameterValues()->attach([
            $typeOfHeadValues->random()->id,
            $colorValues->random()->id,
            $tipValues->random()->id,
            $diameterValues->random()->id,
            $slotValues->random()->id,
        ]);
        $config->individualParameters()->attach([
            $length->id,
            $manufacturer->id,
        ]);
        $config = App\ScrewConfig::create([
            'name' => 'Гипсокартон металл'
        ]);
        $config->parameterValues()->attach([
            $typeOfHeadValues->random()->id,
            $colorValues->random()->id,
            $tipValues->random()->id,
            $diameterValues->random()->id,
            $slotValues->random()->id,
        ]);
        $config->individualParameters()->attach([
            $length->id,
            $manufacturer->id,
            $tip->id,
        ]);
        $config = App\ScrewConfig::create([
            'name' => 'Гипсоволокно'
        ]);
        $config->parameterValues()->attach([
            $typeOfHeadValues->random()->id,
            $colorValues->random()->id,
            $tipValues->random()->id,
            $diameterValues->random()->id,
            $slotValues->random()->id,
        ]);
        $config->individualParameters()->attach([
            $length->id,
            $manufacturer->id,
        ]);
    }
}
