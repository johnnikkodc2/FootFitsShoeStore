<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function AddCart (Request $request, $id) {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Products::find($id);

        Cart::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => ((float)$product->product_price) * $request->quantity,
        ]);

        return Redirect()->back()->with('success', 'Added to Cart!');

        } else {
            return redirect('/login');
        }
    }

    public function DeleteCart ($id) {
        Cart::find($id)->delete();
        return Redirect()->back()->with('success', 'Item deleted');
    }
}
