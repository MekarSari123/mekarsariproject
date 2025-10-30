<?php

namespace Database\Factories;
use App\Models\Penduduk;
use App\Models\Suratpengantar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suratpengantar>
 */
class SuratpengantarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
   protected $model = Suratpengantar::class;
    public function definition()
    {

        
        return [
         'surat_nik' => Penduduk::inRandomOrder()->first()->nik,
            'nomorsurat' =>fake()->numberBetween(10),
           
            // 'user_id' =>fake()->numberBetween($min = 1, $max = 10),
            // 'penduduk_id' =>fake()->numberBetween($min = 1, $max = 10),
           'nik'=>fake()->nik(),
           'nama' =>fake()->name(),
           'alamat' =>fake()->address(),
           'jenissurat' =>fake()->sentence(mt_rand(1,2)),
           'tempatlahir'=>fake()->city(),
           'tanggallahir' =>fake()->date(),
           'agama'=>fake()->sentence(mt_rand(1,2)),
           'nomorhp' =>fake()->phoneNumber(),
        ];
    }
}
