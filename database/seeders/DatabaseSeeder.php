<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Sir',
            'role' => 'pelanggan',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user')
        ]);

        produk::create([
            'nama' => 'Merch Abdul kasim',
            'harga' => '50000',
            'foto' => 'img/opm.jpg',
            'deskripsi' => 'Rafi '
        ]);
        produk::create([
            'nama' => 'Merch Raffi&zaki',
            'harga' => '10000',
            'foto' => 'img/abdul2.png',
            'deskripsi' => 'mkosako '
        ]);
        produk::create([
            'nama' => 'Merch ZakiTshirT',
            'harga' => '200000',
            'foto' => 'img/zakishirt.jpeg',
            'deskripsi' => 'mkosako '
        ]);
        
    }
}
