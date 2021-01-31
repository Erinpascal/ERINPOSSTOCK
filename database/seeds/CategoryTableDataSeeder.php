<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoryTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $category = [
            [
                'id' => 9,
                'name' => 'First',
                'description' => 'dirst'

            ],
            [
                'id' => 10,
                'name' => 'Second',
                 'description' => 'Second'

            ]
        ];

        Category::insert($category);
    }
}
