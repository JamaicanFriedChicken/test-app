<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request) 
    {
        $product = new Product();
        $params = $request->all();

        $product->title = $params['title'];
        $product->description = $params['description'];

        $product->save();
        return response($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update($request->only('title', 'description'));

        return response($product, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
