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
         $this->call(CategorySeeder::class);
         $this->call(SizeSeeder::class);
         $this->call(SubcategorySeeder::class);
         //$this->call(ArticleSeeder::class);
         //$this->call(ColorSeeder::class);
         //$this->call(PhotoSeeder::class);
    }
}
