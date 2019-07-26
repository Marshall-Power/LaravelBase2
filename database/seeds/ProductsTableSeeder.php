<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'name' => 'Gelat',
          'description'=>'Gelat de boles al gusto',
          'brand_id' => 1,
          'image' => 'somwhere.jpg',
          'price' => 1.50,
          'stock' => 100,
          'category_id' => 1,
        ]);
    }
}
