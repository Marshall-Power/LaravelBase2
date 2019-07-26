<?php

use Illuminate\Database\Seeder;


class Products_table_seeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      DB::table('products')->insert([
        'name' => $faker->word,
        'description'=> $faker->text($maxNbChars = 50),
        'brand_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 50, $height = 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0,5, $max = 10),
        'stock' => $faker->randomDigitNotNull,
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
      ]);
      DB::table('products')->insert([
        'name' => $faker->word,
        'description'=> $faker->text($maxNbChars = 50),
        'brand_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 50, $height = 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0,5, $max = 10),
        'stock' => $faker->randomDigitNotNull,
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
      ]);
      DB::table('products')->insert([
        'name' => $faker->word,
        'description'=> $faker->text($maxNbChars = 50),
        'brand_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 50, $height = 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0,5, $max = 10),
        'stock' => $faker->randomDigitNotNull,
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
      ]);
      DB::table('products')->insert([
        'name' => $faker->word,
        'description'=> $faker->text($maxNbChars = 50),
        'brand_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 50, $height = 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0,5, $max = 10),
        'stock' => $faker->randomDigitNotNull,
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
      ]);
      DB::table('products')->insert([
        'name' => $faker->word,
        'description'=> $faker->text($maxNbChars = 50),
        'brand_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 50, $height = 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0,5, $max = 10),
        'stock' => $faker->randomDigitNotNull,
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
      ]);
      DB::table('products')->insert([
        'name' => $faker->word,
        'description'=> $faker->text($maxNbChars = 50),
        'brand_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 50, $height = 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0,5, $max = 10),
        'stock' => $faker->randomDigitNotNull,
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
      ]);
      
      
    }
}
