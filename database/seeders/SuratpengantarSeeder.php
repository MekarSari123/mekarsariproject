<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Suratpengantar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuratpengantarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suratpengantar::factory(10)->create();
    }
}
