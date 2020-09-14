<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=10;$i<=45;$i++){
            \App\Size::create(['value'=>$i]);
        }
    }
}
