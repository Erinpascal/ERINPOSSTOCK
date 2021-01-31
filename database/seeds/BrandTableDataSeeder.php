<?php

use Illuminate\Database\Seeder;
use App\Brand;


class BrandTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = [
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

        Brand::insert($brand);
    }
}
