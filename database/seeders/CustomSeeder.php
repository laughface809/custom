<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Custom::factory(3)->create();
    }
}
