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
        $this->call(ScrewParameterSeeder::class);
        $this->call(ScrewParameterValueSeeder::class);
        $this->call(ScrewConfigSeeder::class);
        $this->call(ScrewSeeder::class);
    }
}
