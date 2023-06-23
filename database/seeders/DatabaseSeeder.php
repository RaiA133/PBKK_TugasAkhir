<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Menu;
use App\Models\Menu_category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'id' => 1,
            'nama' => 'Raie Aswajjillah',
            'email' => 'rai010303@gmail.com',
            'password' => bcrypt('123123')
        ]);
        User::create([
            'id' => 2,
            'nama' => 'Yoan Nurazizah',
            'email' => 'yoan332@gmail.com',
            'password' => bcrypt('123123')
        ]);
        User::create([
            'id' => 3,
            'nama' => 'Elsa Islamiyanti',
            'email' => 'Elsa123@gmail.com',
            'password' => bcrypt('123123')
        ]);

        Menu::create([
            'menu_category_id' => 1, // category : sate
            'nama_menu' => 'Sate Ayam',
            'slug' => 'sate-ayam',
            'gambar' => 'assets/img/default.jpg',
            'harga' => '28'
        ]);
        Menu::create([
            'menu_category_id' => 1,
            'nama_menu' => 'Sate Kambing',
            'slug' => 'sate-kambing',
            'harga' => '30'
        ]);
        Menu::create([
            'menu_category_id' => 1,
            'nama_menu' => 'Sate Sapi',
            'slug' => 'sate-sapi',
            'harga' => '34'
        ]);
        Menu::create([
            'menu_category_id' => 2, // category : jajanan ringan
            'nama_menu' => 'Batagor',
            'slug' => 'batagor',
            'harga' => '12'
        ]);
        Menu::create([
            'menu_category_id' => 2,
            'nama_menu' => 'Rujak Buah',
            'slug' => 'rujak-buah',
            'harga' => '10'
        ]);
        Menu::create([
            'menu_category_id' => 2,
            'nama_menu' => 'Basreng Balado',
            'slug' => 'basreng-balado',
            'harga' => '12'
        ]);
        Menu::create([
            'menu_category_id' => 3, // category = minuman
            'nama_menu' => 'Es Teh Tawar',
            'slug' => 'es-teh-tawar',
            'harga' => '4'
        ]);
        Menu::create([
            'menu_category_id' => 3,
            'nama_menu' => 'Air Putih',
            'slug' => 'air-putih',
            'harga' => '2'
        ]);
        Menu::create([
            'menu_category_id' => 3,
            'nama_menu' => 'Jus Jeruk',
            'slug' => 'jus-jerukeruk',
            'harga' => '6'
        ]);


        Menu::create([
            'nama_kategori' => 'Sate',
            'slug' => 'sate-category'
        ]);
        Menu::create([
            'nama_kategori' => 'Jajaran Ringan',
            'slug' => 'jajanan-ringan'
        ]);
        Menu::create([
            'nama_kategori' => 'Minuman',
            'slug' => 'minuman-category'
        ]);
    }
}
