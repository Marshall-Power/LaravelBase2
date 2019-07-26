<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  protected $fillable = [
    'name', 'logo','country_id'
];

public function products()
{
  return $this->hasMany(Product::class);
}
public function country()
{
  return $this->belongsTo(Country::class);
}
public static $rules= [
  'name' => 'required',
  
];
}
