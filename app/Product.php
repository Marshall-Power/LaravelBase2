<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name', 'description', 'image', 'price','stock','category_id',
  ];

  public function category()
  {
    return $this->belongsTo(Category::Class);
  }
  public function brand()
  {
    return $this->belongsTo(Brand::Class);
  }
}
  