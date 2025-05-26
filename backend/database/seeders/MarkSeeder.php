<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Array = config('constants.seed.MarkSeeder');

        foreach($Array as $item) {
            Mark::create([
                'title' => $item
            ]);
        }
    }
}
