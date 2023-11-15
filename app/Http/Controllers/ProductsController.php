<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.manageProducts', compact('products'));
    }
    public function store(Request $request)
    {



        Products::create([
            'product_name' => $request->input('product_name'),
            'product_brand' => $request->input('product_brand'),
            'product_price' => $request->input('product_price'),
            'product_size' => $request->input('product_size'),
            'product_color' => $request->input('product_color'),
            'product_category' => $request->input('product_category'),

        ]);

        return redirect()->route('AllProducts');
    }
    public function Edit($id)
    {
        $products = Products::find($id);
        return view('admin.editProducts', compact('products'));
    }
    public function Update(Request $request, $id)
    {
        $update = Products::find($id)->update([
            'product_name' => $request->product_name,

        ]);
        return Redirect()->route('AllProducts')->with('success', 'Updated
Successfully');
    }
    public function Delete($id)
    {

        $product = Products::find($id);
        $product->delete();

        return Redirect()->back();

    }
}
