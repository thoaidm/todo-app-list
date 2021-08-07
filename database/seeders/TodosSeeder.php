<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;


class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // (\App\Models\Todo::factory, 10)->create();
        \App\Models\Todo::factory()->count(10)->create();
    }
}
