<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookshelvesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = collect(['Rak 1', 'Rak 2', 'Rak 3', 'Rak 4', 'Rak 5']);
        $categories->each(function ($category) {
            Bookshelf::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        });
    }
}
