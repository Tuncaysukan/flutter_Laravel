<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductApiController extends Controller
{
    public function index()
    {
        $product = product::all();
         return response()->json(['message'=>'success','data'=>$product]);
    }
}
