<?php

use Illuminate\Database\Seeder;

use function GuzzleHttp\Promise\each;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect(['Framework', 'Code']);
        $categories->each(function ($c) {
            \App\Category::create([
                'name'  => $c,
                'slug'  => \Str::slug($c)
            ]);
        });
    }
}
