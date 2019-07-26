<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->insert([
        'name' => 'Catalunya',
      ]);
      DB::table('countries')->insert([
        'name' => 'França',
      ]);
      DB::table('countries')->insert([
        'name' => 'Italia',
      ]);
      DB::table('countries')->insert([
        'name' => 'Alemanya',
      ]);
      DB::table('countries')->insert([
        'name' => 'Portugal',
      ]);
      DB::table('countries')->insert([
        'name' => 'USA',
      ]);
      DB::table('countries')->insert([
        'name' => 'Marroc',
      ]);
    }
}
