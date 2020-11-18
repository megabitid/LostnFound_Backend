<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baranngKategoris = collect([
            'Elektronik',
            'Tas & Dompet',
            'Perhiasan / Aksesoris',
            'Lainnya',
        ]);

        $baranngKategoris->each(function($baranngKategori){
            \App\Models\BarangKategori::create([
                'nama' => $baranngKategori,
            ]);
        });
    }
}
