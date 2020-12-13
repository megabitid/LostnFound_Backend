<?php

namespace Database\Seeders;

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
        $this->call(BarangKategoriSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(StasiunSeeder::class);
    }
}
