<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ComputersTableSeeder::class);
        $this->call(MobilesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(TabletsTableSeeder::class);
        $this->call(ProductIdTableSeeder::class);

    }
}
