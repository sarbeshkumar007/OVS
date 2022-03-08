<?php

namespace App\Http\Controllers;
use App\category;

use Illuminate\Http\Request;

class Relation extends Controller
{
    public function categories(){
        $category = category::with('products')->get();
        dd($category);
      //  return view()
    }
}
