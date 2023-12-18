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
    public function index2()
    {
        $products = Products::all();
        return view('user.shop', compact('products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            // Your existing validation rules

            // Add validation for images
            'product_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('product_images')) {
            $images = [];
            foreach ($request->file('product_images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $imageName);
                $images[] = $imageName;
            }
        }


        Products::create([
            'product_name' => $request->input('product_name'),
            'product_brand' => $request->input('product_brand'),
            'product_price' => $request->input('product_price'),
            'product_size' => $request->input('product_size'),
            'product_quantity' => $request->input('product_quantity'),
            'product_color' => $request->input('product_color'),
            'product_category' => $request->input('product_category'),
            'product_description' => $request->input('product_description'),
            'product_images' => $images,

        ]);

        return redirect()->route('AllProducts')->with('success', 'Product Added!');
    }
    public function Edit($id)
    {
        $products = Products::find($id);
        return view('admin.editProducts', compact('products'));
    }
    public function Details($id)
    {
        $products = Products::find($id);
        return view('user.productDetails', compact('products'));
    }
    public function Update(Request $request, $id)
    {
        $update = Products::find($id)->update([
            'product_name' => $request->product_name,
            'product_brand' => $request->product_brand,
            'product_price' => $request->product_price,
            'product_size' => $request->product_size,
            'product_quantity' => $request->product_quantity,
            'product_color' => $request->product_color,
            'product_description' => $request->product_description,
            'product_category' => $request->product_category,

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
    public function restore($id)
    {
        $products = Products::withTrashed()->find($id);

        if ($products) {

            $products->restore();
            return redirect()->back()->with('success', 'Product has been restored successfully.');
        } else {

            return redirect()->back()->with('error', 'Product not found.');
        }
    }
    public function ForceDelete($id)
    {
        $products = Products::withTrashed()->find($id);

        if ($products) {
            $products->forceDelete();
            return redirect()->back()->with('success', 'Product has been force deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Product not found.');
        }
    }


}
