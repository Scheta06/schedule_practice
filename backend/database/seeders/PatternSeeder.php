<?php

namespace Database\Seeders;

use App\Models\Pattern;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Array = config('constants.seed.PatternSeeder');

        foreach($Array as $item) {
            Pattern::create($item);
        }
    }
}
