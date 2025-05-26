<?php

namespace Database\Seeders;

use App\Models\Extense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Array = config('constants.seed.ExtenseSeeder');

        foreach($Array as $item) {
            Extense::create($item);
        }
    }
}
