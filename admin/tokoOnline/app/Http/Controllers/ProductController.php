<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        $product=product::all();

       
        return view('Product.index',compact(['product']));
        
    }
    
    public function create()
    {
        return view('Product.create');
    }
    public function store(Request $request)
    {
       $product= $request->all();

       product::create($product);
       return redirect('/products'); 
    }

    public function edit ($id)
    {
        $product=product::find($id);
        return view('product.edit',compact(['product']));
    }

    public function update(Request $request ,$id)
    {
        $product = product::find($id);

        $product->update($request->all());
        return redirect('/products');

       
    }
    public function delete($id)
    {
        $product = product::find($id)->delete();
        return redirect('/products');

    }
}
