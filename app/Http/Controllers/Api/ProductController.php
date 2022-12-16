<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Traits\apiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\uploads;

class ProductController extends Controller
{
    use apiResponse;
    public function index()
    {

        $products = Product::all();
        $products = ProductResource::collection(Product::all());
        return $this->apiResponse(200, 'found', null, $products);
    }

    public function show($id)
    {

        // $this->authorize('isAdmin');
        $product = Product::find($id);
        if ($product) {
            return $this->apiResponse(201, 'found', null, new ProductResource($product));
        }
        return $this->ApiResponse(404, 'The product Not Found');
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'product' => 'required|max:20',
            'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(400, 'validation error', $validator->errors());
        }

        $file = $request->file('images');
        $imageName = time() . '.' . $file->extension();
        $imagePath = public_path() . '/files';

        $file->move($imagePath, $imageName);

        $product = Product::create([
            'name' => $request->name,
            'product' => $request->product,
            'images' => $imagePath
        ]);

        if ($product) {
            return $this->ApiResponse(201, 'data saved successfuly', null, new ProductResource($product));
        }
        return $this->ApiResponse(400, 'error');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = validator::make($data, [
            'name' => 'required',
            'product' => 'required|max:20',
            // 'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return $this->ApiResponse(404, 'validation error', $validator->errors());
        }

        $product = Product::find($id);
        if (!$product) {
            return $this->ApiResponse(404, 'the product wasnt found');
        }
        $product->update($request->all());

        return $this->ApiResponse(201, 'updated', null, new ProductResource($product));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if(!$product){
            return $this->ApiResponse(404, 'the product wasnt found');

        }
        $product->delete();
                if ($product){
                    return $this->ApiResponse(201, 'deleted', null, new ProductResource($product));

                }

    }
}
