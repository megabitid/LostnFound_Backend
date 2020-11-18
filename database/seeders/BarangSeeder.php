<?php

namespace Database\Seeders;

use App\Models\BarangImage;
use App\Models\BarangKategori;
use App\Models\BarangStatus;
use App\Models\Stasiun;
use App\Models\User;
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
            DB::table('barang_images')->insert(
                [
                    "nama"=>$faker->name,
                    "link"=>$faker->imageUrl,
                ]
            );
            DB::table('users')->insert(
                [
                    'nama'=>$faker->name,
                    'nip'=>$faker->unique()->randomAscii,
                    'email'=>$faker->email,
                    'password'=>$faker->password,
                    'image'=>$faker->imageUrl,
                    'role'=>$faker->numberBetween(0, 2),
                    'email_verified_at'=>$faker->date,
                ]
            );
        }
        DB::table('users')->insert(
            [
                'nama'=>$faker->name,
                'nip'=>$faker->unique()->randomAscii,
                'email'=>"testemail@mail.com",
                'password'=>bcrypt('testpassword'),
                'image'=>$faker->imageUrl,
                'role'=>$faker->numberBetween(0, 2),
                'email_verified_at'=>$faker->date,
            ]
        );
    $stasiun_ids = Stasiun::pluck('id')->toArray();
        $kategori_ids = BarangKategori::pluck('id')->toArray();
        $image_ids = BarangImage::pluck('id')->toArray();
        $user_ids = User::pluck('id')->toArray();
        $status_ids = BarangStatus::pluck('id')->toArray();

        for ($i=0; $i<$limit; $i++) {
            DB::table('barangs')->insert(
                [
                    'nama_barang'=>$faker->name,
                    'tanggal'=>$faker->date,
                    'stasiun_id'=>$faker->randomElement($stasiun_ids),
                    'kategori_id'=>$faker->randomElement($kategori_ids),
                    'barangimage_id'=>$faker->randomElement($image_ids),
                    'status_id'=>$faker->randomElement($status_ids),
                    'user_id'=>$faker->randomElement($user_ids),
                    
                ]
            );
        }
    }
}
