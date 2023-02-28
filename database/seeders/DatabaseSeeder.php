<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Kategori::create([
            'kode' => 'manga',
            'nama' => 'Manga'
        ]);

        \App\Models\Penerbit::create([
            'kode' => 'shounen-jump',
            'nama' => 'Shounen Jump'
        ]);

        \App\Models\User::create([
            'nis' => 2000111,
            'fullname' => 'Mimin Ganteng',
            'username' => 'mimin',
            'password' => bcrypt('mimin'),
            'kelas' => 'XII - A',
            'alamat' => 'Komplek PTB Blok D3/10'
        ]);

        \App\Models\Buku::create([
            'kategori_id' => 1,
            'penerbit_id' => 1,
            'judul' => 'Jujutsu Kaisen',
            'tahun_terbit' => '2020',
            'isbn' => '10021'
        ]);
    }
}
