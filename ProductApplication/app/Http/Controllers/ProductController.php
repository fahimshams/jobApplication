<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProductControllerAPI;

class ProductController extends Controller
{
    //
    function showForm(){
        return view('productForm');
    }

    function findProductForm(){
        return view('editForm');
    }

    function welcomePage(){
        return view('welcome');
    }


    function findProduct(Request $request){
        $product = Product::where('name', $request->name)->first();
        $productId = $product->id;

        return redirect('api/products/'.$productId);

    }

    function showAllProduct(){
        $product = Product::all();

        return $product;
       
    }




}
