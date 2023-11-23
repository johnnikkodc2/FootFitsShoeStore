<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
