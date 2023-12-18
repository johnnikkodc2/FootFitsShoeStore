<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderProducts;
use App\Models\Orders;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    //
    public function CreateOrder(Request $request)
    {
        $cart = Cart::where('user_id', Auth::id())->get();
        $user = Auth::user();
        $totalPrice = 0;

        foreach ($cart as $cart_item) {
            $totalPrice += $cart_item->price;
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'email|max:255',
            'address' => 'required|string|max:255',
            'address_2' => 'nullable|string|max:255',
            'region' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'payment_namecard' => 'required|string|max:255',
            'payment_cardnumber' => 'required|string|max:16',
            'expiration' => 'required',
            'cvv' => 'required|numeric|digits:3',
        ]);

        // If validation fails, return the validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $order = Orders::create([
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'address' => $request->address,
                'address_2' => $request->address_2,
                'region' => $request->region,
                'city' => $request->city,
                'zip' => $request->zip,
                'payment_namecard' => $request->payment_namecard,
                'payment_cardnumber' => $request->payment_cardnumber,
                'expiration' => $request->expiration,
                'cvv' => $request->cvv,
                'total_price' => $totalPrice,
                'status' => 'Processing'
            ]);

            $cart = Cart::where('user_id', Auth::id())->get();
            foreach ($cart as $cart_item) {
                OrderProducts::create([
                    'order_id' => $order->id,
                    'product_id' => $cart_item->product_id,
                    'quantity' => $cart_item->quantity,
                    'price' => $cart_item->price,
                ]);
            }

            $i = 0;
            foreach ($cart as $cart_item) {
                Cart::find($cart_item->id)->forceDelete();
                $i++;
            }
            ;

            return Redirect()->to('receipt/' . $order->id);
        }
    }

    public function DeleteOrder($id)
    {
        Orders::find($id)->delete();
        OrderProducts::where('order_id', $id)->delete();
        return Redirect()->back()->with('success', 'Order Cancelled');
    }
    public function EditOrder($id)
    {
        $order = Orders::find($id);
        return view('admin.editorderstatus', compact('orders'));
    }


}
