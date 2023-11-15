<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootFitsController extends Controller
{
    function index()
    {
        return view('/user/index');
    }
    function aboutus()
    {
        return view('/user/about');
    }
    function login()
    {
        return view('/user/login');
    }
    function bestSeller()
    {
        return view('/user/bestSeller');
    }
    function shop()
    {
        return view('/user/shop');
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
        return view('/admin/manageProducts');
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
    function register()
    {
        return view('register');
    }


}
