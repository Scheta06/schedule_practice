<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Array = config('constants.seed.GenerationSeeder');

        foreach ($Array as $item) {
            Generation::create([
                'title' => $item,
            ]);
        }
    }
}
