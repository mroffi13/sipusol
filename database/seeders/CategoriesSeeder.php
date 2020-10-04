<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Each;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = collect(['Science', 'Computer', 'Novel', 'Fiksi', 'Programming']);
        $categories->each(function ($category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        });
    }
}
