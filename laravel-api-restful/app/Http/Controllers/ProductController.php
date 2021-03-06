<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest as Request;
use App\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index(){
        $minutes = Carbon::now()->addMinutes(10);
        $produts = \Cache::remember('api::products', $minutes, function () {
            return Product::all();
        });
        return $produts;
    }

    public function store(Request $request){
        \Cache::forget('api::products');
        $data = $request->all();
        $data['user_id'] = \Auth::user()->id;
        return Product::create($data);
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return $product;
    }

    public function show(Request $request, Product $product){
        return $product;
    }

    public function destroy(Request $request, Product $product){
        $this->authorize('delete', $product);
        $product->delete();
        return $product;
    }
}
