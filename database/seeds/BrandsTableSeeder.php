<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brands')->insert([
        'name' => 'Ben & Jerry',
        'logo' => 'https://www.ben-jerrys.es/files/live/sites/systemsite/files/flavors/products/eu/pints/open-closed-pints/cookie-dough-landing.png',    
        'country_id' => '6',        
      ]);
      DB::table('brands')->insert([
        'name' => 'Häagen-Dazs',
        'logo' => 'https://static.condisline.com/resize_1280x1347/images/catalog/large/183177.jpg',    
        'country_id' => '4',        
      ]);
      DB::table('brands')->insert([
        'name' => 'Blue Bell Creameries',
        'logo' => 'https://www.bluebell.com/wp-content/uploads/2017/02/BBLogo-Temp.png',    
        'country_id' => '3',        
      ]);
      DB::table('brands')->insert([
        'name' => 'Baskin-Robbins',
        'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Baskin-Robbins_logo.svg/1200px-Baskin-Robbins_logo.svg.png',    
        'country_id' => '5',        
      ]);

    }
}
