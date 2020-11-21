<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\BarangKategori;
use App\Models\BarangStatus;
use App\Models\Stasiun;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $limit = 5;
        $statusArray = ['hilang', 'ditemukan', 'didonasikan'];
        foreach ($statusArray as &$status) {
            DB::table('barang_statuses')->insert(
                [
                    "nama"=>$status,
                ]
            );
        }
        for ($i=0; $i<$limit; $i++) {
            DB::table('stasiuns')->insert(
                [
                    "nama"=>$faker->name,
                ]
                );
            DB::table('barang_kategoris')->insert(
                [
                    "nama"=>$faker->name,
                ]
            );
            DB::table('users')->insert(
                [
                    'nama'=>$faker->name,
                    'nip'=>$faker->unique()->creditCardNumber,
                    'email'=>$faker->email,
                    'password'=>$faker->password,
                    'image'=>$faker->imageUrl,
                    'role'=>0,
                    'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ]
            );
        }
        DB::table('users')->insert(
            [
                'nama'=>$faker->name,
                'nip'=>$faker->unique()->creditCardNumber,
                'email'=>"testemail1@mail.com",
                'password'=>bcrypt('testpassword1'),
                'image'=>$faker->imageUrl,
                'role'=>$faker->numberBetween(0, 2),
                'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );
        $stasiun_ids = Stasiun::pluck('id')->toArray();
        $kategori_ids = BarangKategori::pluck('id')->toArray();
        $user_ids = User::pluck('id')->toArray();
        $status_ids = BarangStatus::pluck('id')->toArray();

        for ($i=0; $i<$limit; $i++) {
            DB::table('barangs')->insert(
                [
                    'nama_barang'=>$faker->name,
                    'lokasi'=>$faker->address,
                    'deskripsi'=>$faker->text,
                    'warna'=>$faker->colorName,
                    'merek'=>$faker->company,
                    'tanggal'=>Carbon::now()->format('Y-m-d H:i:s'),
                    'stasiun_id'=>$faker->randomElement($stasiun_ids),
                    'kategori_id'=>$faker->randomElement($kategori_ids),
                    'status_id'=>$faker->randomElement($status_ids),
                    'user_id'=>$faker->randomElement($user_ids),
                ]
            );
        }

        $barang_ids = Barang::pluck('id')->toArray();
        for ($i=0; $i<$limit; $i++) {
            DB::table('barang_images')->insert(
                [
                    'nama'=>$faker->name,
                    'uri'=>$faker->imageUrl,
                    'barang_id'=>$faker->randomElement($barang_ids)
                ]
            );
        }
    }
}
