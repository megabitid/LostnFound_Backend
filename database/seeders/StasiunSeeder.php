<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StasiunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stasiuns = ['Stasiun Gambir', 'Stasiun Mamuju', 'Stasiun Makassar', 'Stasiun Surabaya'];

        foreach ($stasiuns as $stasiun) {
            \App\Models\Stasiun::create([
                'nama' => $stasiun,
            ]);
        }

    }
}
