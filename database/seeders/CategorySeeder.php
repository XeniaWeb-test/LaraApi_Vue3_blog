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
        Category::factory()
            ->count(4)
            ->sequence(
                [
                    'title' => 'Men\'s clothing',
                ],
                [
                    'title' => 'Women\'s clothing',
                ],
                [
                    'title' => 'Jewelery',
                ],
                [
                    'title' => 'Electronics',
                ],
            )
            ->create();
    }
}
