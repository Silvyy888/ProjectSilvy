<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::create([
            'name' => 'Pii',
            'email' => 'pii@gmail.com',
            'password' => bcrypt ('1234')
        ]);

        // User::admin([
        //     'name_toko' => 'LittleHugs',
        //     'email' => 'pii@gmail.com',
        //     'password' => bcrypt ('1234')
        // ]);

        Produk::create([
            'nama_produk' => 'Botol Susu',
            'harga' => 56000,
            'stok' => 100,
            'kategori' => 'Perawatan',             
            'foto' => ''
        ]);
        Produk::create([
            'nama_produk' => 'Topi',
            'harga' => 56000,
            'stok' => 100,
            'kategori' => 'Fashion',             
            'foto' => ''
        ]);
    }
}
