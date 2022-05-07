<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'nama_kategori' => "Harga",
                'bobot' => 0.4
            ],
            [
                'nama_kategori' => "Mesin",
                'bobot' => 0.2
            ],
            [
                'nama_kategori' => "Tipe Kendaraan",
                'bobot' => 0.1
            ],
            [
                'nama_kategori' => "Tenaga Maksimal",
                'bobot' => 0.1
            ],
            [
                'nama_kategori' => "Kapasitas Penumpang",
                'bobot' => 0.2
            ],
        ];

        DB::table('kategori')->insert($posts);
    }
}
