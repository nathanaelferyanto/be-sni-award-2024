<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'jono',
            'email' => 'jono123@gmail.com',
            'password' => '1234568790',
        ]);

        DB::table('tag')->insert([
            'nama' => 'SNIAward2024',
        ]);
        
        DB::table('kategori_berita')->insert([
            'nama' => 'berita',
        ]);
        
        DB::table('berita')->insert([
            'user_id' => 1,
            'kategori_id'=> 1,
            'judul_berita' => 'Perusahaan A memenangkan SNI Award 2024',
            'deskripsi' => 'Lorem ipsum sir dolor amet'
        ]);
        
        DB::table('berita_tag')->insert([
            'berita_id' => 1,
            'tag_id' => 1,
        ]);
    }
}
