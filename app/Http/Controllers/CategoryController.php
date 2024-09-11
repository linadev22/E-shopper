<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('Category.index');
    }
    public function login()
    {
        return view('Category.login');
    }

    public function cart()
    {
        return view('Category.cart');
    }


    public function checkout()
    {
        return view('Category.checkout');
    }

    public function product()
    {
        return view('Category.product');
    }

    public function product_detail()
    {
        return view('Category.product_detail');
    }


    public function contact_us()
    {
        return view('Category.contact_us');
    }

    public function blog()
    {
        return view('Category.blog');
    }
}
