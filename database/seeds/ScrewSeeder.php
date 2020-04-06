<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lengths = \App\ScrewParameter::firstWhere('name', 'Длина')->values;
        $manufacturers = \App\ScrewParameter::firstWhere('name', 'Производитель')->values;

        $screw = new \App\Screw();
        $screw->config()->associate(\App\ScrewConfig::find(1));
        $screw->save();
        $screw->parameterValues()->attach($lengths->random());
        $screw->parameterValues()->attach($manufacturers->random());

        $screw = new \App\Screw();
        $screw->config()->associate(\App\ScrewConfig::find(2));
        $screw->save();
        $screw->parameterValues()->attach($lengths->random());
        $screw->parameterValues()->attach($manufacturers->random());

        $screw = new \App\Screw();
        $screw->config()->associate(\App\ScrewConfig::find(3));
        $screw->save();
        $screw->parameterValues()->attach($lengths->random());
        $screw->parameterValues()->attach($manufacturers->random());
    }
}
