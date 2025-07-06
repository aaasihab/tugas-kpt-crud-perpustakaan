<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Kategori;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $kategoriList = Kategori::all();

        foreach ($kategoriList as $kategori) {
            for ($i = 1; $i <= 3; $i++) {
                Buku::create([
                    'kategori_id' => $kategori->id_kategori,
                    'judul' => $faker->sentence(3),
                    'deskripsi' => $faker->paragraph,
                    'penulis' => $faker->name,
                    'penerbit' => $faker->company,
                    // Gambar dummy langsung dari URL (otomatis dan berbeda-beda)
                    'cover' => 'https://picsum.photos/200/300?random=' . rand(1, 9999),
                    'status' => 'tersedia',
                ]);
            }
        }
    }
}
