<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Array = config('constants.seed.CategorySeeder');

        foreach ($Array as $item) {
            Category::create([
                'title' => $item,
            ]);
        }
    }
}
