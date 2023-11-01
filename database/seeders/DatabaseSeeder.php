<?php

namespace Database\Seeders;

use App\Models\Surat;
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
        Surat::factory(10)->create();
    }
}
