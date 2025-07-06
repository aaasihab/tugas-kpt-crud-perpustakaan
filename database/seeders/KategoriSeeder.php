<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            [
                'nama' => 'Fiksi',
                'keterangan' => 'Buku-buku yang bersifat imajinatif atau rekaan.',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Non-Fiksi',
                'keterangan' => 'Buku-buku berdasarkan fakta dan data nyata.',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Biografi',
                'keterangan' => 'Buku yang menceritakan kehidupan seseorang.',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Teknologi',
                'keterangan' => 'Buku yang membahas perkembangan teknologi.',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Pendidikan',
                'keterangan' => 'Buku yang digunakan untuk keperluan belajar-mengajar.',
                'status' => 'aktif',
            ],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
