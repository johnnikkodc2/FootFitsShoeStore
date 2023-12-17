<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderProducts;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FootFitsController extends Controller
{
    function index()
    {
        return view('/user/index');
    }
    function about()
    {
        return view('/user/about');
    }
    function login()
    {
        return view('/user/login');
    }
    function register()
    {
        return view('/user/register');
    }
    function bestSeller()
    {
        return view('/user/bestSeller');
    }
    function shop()
    {
        return view('/user/shop');
    }
    function productDetails()
    {
        return view('/user/productDetails');
    }
    function checkout()
    {
        if (Auth::id()) {
            $cart = Cart::where('user_id', Auth::id())->get();
            return view('/user/checkout', compact('cart'));
        } else {
            return view('/user/login');
        }
    }
    function receipt($id)
    {
        if (Auth::id()) {
            $order = Orders::find($id);
            $orderProducts = OrderProducts::where('order_id', $order->id)->get();
            return view('/user/receipt', compact('order', 'orderProducts'));
        } else {
            return view('/user/login');
        }
    }
    function myorders()
    {
        if (Auth::id()) {
            $orders = Orders::where('user_id', Auth::id())->get();
            $orderProducts = OrderProducts::whereIn('order_id', $orders->pluck('id'))->with('product')->get();
            return view('/user/myorders', compact('orders', 'orderProducts'));
        } else {
            return view('/user/login');
        }
    }
    function faq()
    {
        return view('/user/faq');
    }
    function profile()
    {
        if (Auth::id()) {

            return view('/user/profile');
        } else {
            return view('/user/login');
        }
    }
    public function cart()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Fetch the cart items for the current user
            $userId = Auth::id();
            $cart = Cart::where('user_id', $userId)->get();

            // Pass the cart items to the 'cart' view
            return view('user.cart', compact('cart'));
        } else {
            // Redirect to the login page if the user is not authenticated
            return redirect('/user/login');
        }
    }




    function admin()
    {
        return view('/admin/admin');
    }
    function manageAccount()
    {
        return view('/admin/manageAccount');
    }

    function manageCustomers()
    {
        $users = User::all();
        return view('/admin/manageCustomers', compact('users'));

    }
    function manageOrders()
    {
        return view('/admin/manageOrders');
    }
    function manageProducts()
    {
        return view('/admin/manageproducts');
    }
    function editProducts()
    {
        return view('/admin/editProducts');
    }
    function manageProductList()
    {
        return view('/admin/manageProductList');
    }

    function order()
    {
        return view('order');
    }
    function adminLogin()
    {
        return view('/admin/adminLogin');
    }

    function adminRegister()
    {
        return view('/admin/adminRegister');
    }



}
