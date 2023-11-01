<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_surat' => $this->faker->numerify('####/PD#/TU#/###'),
            'kategori' => $this->faker->randomElement($array = array ('undangan', 'pengumuman', 'nota dinas', 'pemberitahuan')),
            'judul' => $this->faker->sentence(),
            'file_surat' => 'storage/file_surat/D3 - Soal Praktek Pemrograman 2022.pdf',
        ];
    }
}
