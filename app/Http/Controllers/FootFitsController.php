<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    function admin()
    {
        return view('/admin/index');
    }
    function manageAccount()
    {
        return view('/admin/manageAccount');
    }

    function manageCustomers()
    {
        return view('/admin/manageCustomers');
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
        return view('manageProductList');
    }

    function order()
    {
        return view('order');
    }



}
