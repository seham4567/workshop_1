<?php

namespace App\Traits;

use App\Models\Product;
use Illuminate\Http\Request;

trait uploads
{
    public function uploads(
         $request,$folder_name,$name){

        if ($request->hasfile('images')) {
            // return $request;

            foreach ($request->file('images') as $file) {

                $file_name = time() .$name. '.png';

                $file->storeAs($folder_name,$file_name, 'uploads');
                // $file->move(public_path('uploads'), $file_name);

                 Product::create([
            'name' => $request->name,
            'product' => $request->product,
            'images' => $file_name,
                 ]);
            }

    }
    }



}
