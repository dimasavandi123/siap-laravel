<?php

namespace Database\Seeders;

use App\Models\data;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        data::factory()->count(500)->create();
    }
}
