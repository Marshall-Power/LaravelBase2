<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App;

class ProductsController extends Controller
{
  public function cataleg()
  {
    $products = Product::get();
    return view('cataleg.index', compact('products'));
  }

  public function privacitat()
  {
    return view('cataleg.privacitat');
  }
  public function contacte()
  {
    return view('cataleg.contacte');
  }
  public function detallcataleg($id)
  {
   $product=Product::find($id);
   return view('cataleg.detallcataleg',compact('product'));
  }
  public function canviIdioma($locale)
  {
    App::setLocale($locale);
    return redirect('cataleg');
  }
}
