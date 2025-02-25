<?php

namespace Database\Seeders;

use App\Models\Harbor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HarborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Harbor::factory()
            ->count(10)
            ->create();
    }
}
