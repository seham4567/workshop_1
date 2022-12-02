<?php

namespace App\Http\Repository;

use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;

 class ProductRepository implements Productinterface{

    public function products(){

        $products=Product::all();
        return view('products.index',compact('products'));
    }

    public function create_products(){

        return view('products.create');

    }

    public function store_products($request){
        
        Product::create($request->all());
        Alert::success('Success Title', 'saved');

        return redirect()->back();
   }
        
    public function edit_products($id)
    {
        $product=Product::findorfail($id);
        return view('products.edit',compact('product'));
    }

    public function update_products($request){

        $product=Product::findorfail($request->id);
        $product->update(
            ($request->all()));
         Alert::success('Success Title', 'updated');

         return redirect()->back();

        
    }
    public function delete_products($id){

        Product::destroy($id);
        Alert::success('Success Title', 'deleted');

        return redirect()->back();


    }

 }
