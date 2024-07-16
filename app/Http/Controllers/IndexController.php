<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //frontend routes
    public function index( ) 
    {
        return view('frontend.index');
    }

    public function about( ) 
    {
        return view('frontend.menu.about');
    }

    public function blog( ) 
    {
        return view('frontend.menu.blog');
    }

    public function cart( ) 
    {
        return view('frontend.menu.cart');
    }

    public function checkout( ) 
    {
        return view('frontend.menu.checkout');
    }

    public function contact( ) 
    {
        return view('frontend.menu.contact');
    }

    public function services( ) 
    {
        return view('frontend.menu.services');
    }

    public function shop( ) 
    {
        return view('frontend.menu.shop');
    }

}
