<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class CartController extends Controller
{
    //
    public function AddCart(Request $request, $id)
    {
        if (Auth::user()) {
            $user = Auth::user();
            $product = Products::find($id);
            $cart = Cart::where('product_id', $id)->first();

            if ($cart) {
                Cart::where('product_id', $id)->first()->update([
                    'quantity' => $request->quantity,
                    'price' => ((float) $product->product_price) * $request->quantity,
                ]);
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'quantity' => $request->quantity,
                    'price' => ((float) $product->product_price) * $request->quantity,
                ]);
            }

            return Redirect()->back()->with('success', 'Added to Cart!');

        } else {
            return Redirect('/login')->with('message', 'Must login first to add to cart');
        }
    }

    public function EditCart($id)
    {
        $cart = Cart::find($id);
        return view('user.productDetails', compact('cart'));
    }

    public function UpdateCart(Request $request, $id)
    {
        $cart = Cart::find($id);
        $product = Products::find($cart->product_id);
        Cart::find($id)->update([
            'quantity' => $request->quantity,
            'price' => ((float) $product->product_price) * $request->quantity,
        ]);
        return Redirect()->route('cart')->with('success', 'Cart Item Edited!');
    }

    public function DeleteCart($id)
    {
        $cart = Cart::find($id);
        $product = Products::find($cart->product_id);
        Cart::find($id)->delete();
        return Redirect()->back()->with('success', 'Item (' . $product->product_name . ') deleted');
    }

    public function CheckOut(Request $request)
    {
        $i = 0;
        foreach ($request->cart_id as $id) {
            $cart = Cart::find($id);
            $product = Products::find($cart->product_id);
            Cart::find($id)->update([
                'quantity' => (int) $request->qty[$i],
                'price' => ((float) $product->product_price) * $request->qty[$i++]
            ]);
        }
        ;
        return Redirect()->route('checkout');
    }

    public function restore($id)
    {
        $cart = Cart::withTrashed()->find($id);

        if ($cart) {

            $cart->restore();
            return redirect()->back()->with('success', 'Cart has been restored successfully.');
        } else {

            return redirect()->back()->with('error', 'Cart not found.');
        }
    }
    public function ForceDelete($id)
    {
        $cart = Cart::withTrashed()->find($id);

        if ($cart) {
            $cart->forceDelete();
            return redirect()->back()->with('success', 'Cart has been force deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Cart not found.');
        }
    }

}
