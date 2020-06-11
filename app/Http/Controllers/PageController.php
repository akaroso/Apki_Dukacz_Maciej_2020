<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
    $pages = Page::all();

    return view('pages.cart');      
    dd($pages);
    }

    public function index2()
    {
    return view('pages.cart');     
    }

    public function index3()
    {
    return view('pages.shop');     
    }
   
    



}
