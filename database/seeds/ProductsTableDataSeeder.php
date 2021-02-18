<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $products = [
            [
                'id' => 1,
                'category_id'=>9,
                'name' => 'Para1',
                 'code' => 'gfh889',
                 'qty' => '278',
                  'bprice' => '27',
                 'sprice' => '289',
                 'profit' => '50',
                  'unit_profit' => '50',
                 'brand_id' => '10',
                 'image' => null,
            ],
            [
                'id' => 2,
                 'category_id'=>9,
                'name' => 'Para2',
                 'code' => 'gfh889',
                 'qty' => '278',
                  'bprice' => '27',
                 'sprice' => '289',
                 'profit' => '50',
                  'unit_profit' => '50',
                 'brand_id' => '10',
                 'image' => null,

            ]
        ];

}
