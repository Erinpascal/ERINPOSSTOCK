<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeed::class);

         $this->call([
            BrandTableDataSeeder::class,
            CategoryTableDataSeeder::class,
            ProductsTableDataSeeder::class,
            PermissionTableSeeder::class,
            UserTableSeeder::class,
        ]);

    }
}
