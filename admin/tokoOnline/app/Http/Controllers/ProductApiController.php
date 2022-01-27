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

    public function create(Request $request)
    {
        return response()->json(['message'=>'success','data'=>'data  test']);
    }

    public function show( $id )
    {
        $data=product::find($id);
       return response()->json(['message'=>'success','data'=>$data]);
    }
    public function store(Request  $request )
    {
        $product= $request->all();
        return response()->json(['message'=>'insert success','data'=>$product]);

    }

    public function update(Request $request , $id)
    {
       $product = product::find($id);

       $product->update($request->all());
        return response()->json(['message'=>'update success','data'=>$product]);
    }

     public function delete($id)
     {
     $product = product::find($id)->delete();
    return response()->json(['message'=>'delete success','data'=>null]);

     }
}
