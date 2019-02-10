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
        $this->call([
            RolsTableSeeder::class,
            HorarisTableSeeder::class,
            UsersTableSeeder::class,
            EstatIncidenciesTableSeeder::class,
            TipusPrioritatTableSeeder::class,
            TipusAtraccionsTableSeeder::class
        ]);
    }
}
