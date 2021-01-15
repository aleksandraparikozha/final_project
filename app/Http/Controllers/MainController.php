<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Product $products){

        $products = Product::all();
        return view('index')->with('products', $products);
    }

    public function categories(){
        $categories = Category::all();
        return view('categories')->with('categories', $categories);
    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category')->with('category', $category);
    }

    public function product($code){
        $product = Product::where('code', $code)->first();
        return view('product', compact('product'));

    }
    public function edit(Product  $product){

        return view('edit')->with('product', $product);

    }
    public function update(Request $request, Product $product){

        $product->update($request->all());

        return redirect()->route('index');



    }
    public function delete(Product $product){

        $product->delete();

        return redirect()->back();
}
    public function create(){


        return view('create');


    }
    public function save(Request $request){
        request()->validate([
            'name' => 'required|min:2|unique:products',
            'description' => 'required',
            'category_id' => 'required',
            'code' => 'required',
            'price' => 'required',
        ]);
        $product = new Product($request->all());
        $product->save();
        return redirect()->back();


    }
}
