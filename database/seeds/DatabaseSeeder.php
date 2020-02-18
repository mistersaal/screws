<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ScrewColorsTableSeeder::class);
        $this->call(ScrewLengthsTableSeeder::class);
        $this->call(ScrewManufacturersTableSeeder::class);
        $this->call(ScrewDiametersTableSeeder::class);
        $this->call(ScrewSlotsTableSeeder::class);
        $this->call(ScrewTipsTableSeeder::class);
        $this->call(ScrewTypesOfHeadTableSeeder::class);
        $this->call(ScrewConfigsTableSeeder::class);
        $this->call(ScrewsTableSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(IndividualOrderSeeder::class);
    }
}
