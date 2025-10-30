<?php

namespace Database\Seeders;
use App\Models\penduduk;
use App\Models\User;
use App\Models\Suratpengantar;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Suratpengantar::factory(50)->create();
        penduduk::factory(50)->create();
    }
}
