<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Penduduk;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Penduduk::class;
    public function definition()
    {
        return [
 
           'nik'=>fake()->nik(),
           'nokk'=>fake()->nik(),
           'nama' =>fake()->name(),
           'hubungankeluarga' =>fake()->sentence(mt_rand(1,2)),
           'tempatlahir'=>fake()->city(),
           'tanggallahir' =>fake()->date(),
           'agama'=>fake()->sentence(mt_rand(1,2)),
           'pekerjaan' =>fake()->sentence(mt_rand(1,2)),
           'alamat' =>fake()->address(),
           'nomorrt' =>fake()->numberBetween(1,37),
           'nomorhp' =>fake()->phoneNumber(),
           'foto' =>fake()->sentence(mt_rand(1,2)),
        ];
    }
}
