<?php

namespace App\Http\Controllers;
use App;
use App\Product;
use App\Brand;
use App\Category;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function products()
  {
    $products = Product::get();
    $brands = Brand::get();
    $categories = Category::get();
    return view('/welcome2', compact('products','brands','categories'));
  }

  public function productbrand($id)
  {
    $products = Product::get();
    $brands = Brand::get();
    $categories = Category::get();
    $brand = Brand::find($id);
    return view('/welcome2', compact('products','brands','categories','brand'));
  }
  public function productcategory($catid)
  {
    $products = Product::get();
    $category = Category::find($catid);
    $categories = Category::get();
    $brands = Brand::get();
    return view('/welcome2', compact('products','brands','categories','category'));
  }
}
