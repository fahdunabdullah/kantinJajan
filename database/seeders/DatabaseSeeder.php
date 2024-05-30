<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        $this->call(LaratrustSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Fahdun',
            'username' => 'Admin',
            'email' => 'frins@gmail.com',
            'password' => Hash::make('12345678'),
        ])->attachRole('admin');

        \App\Models\User::factory()->create([
            'name' => 'Dia',
            'username' => 'Cashier',
            'email' => 'cashier@gmail.com',
            'password' => Hash::make('12345678'),
        ])->attachRole('kasir');
    }
}
