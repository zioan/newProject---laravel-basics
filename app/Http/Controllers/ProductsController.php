<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to products page";
        $description = "Created by Ioan Zaharia";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        //return view and pass argumets

        //Compact method
        // return view('products.index', compact('title', 'description'));

        //With method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        //Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about(){
        return 'About products page';
    }
}
