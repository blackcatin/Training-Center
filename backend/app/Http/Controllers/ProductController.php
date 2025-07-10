<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    Public function index(){
        return inertia::render('Products/Index', []);
    }

    Public function create(){
        return inertia::render('Products/Create');
    }

    Public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index');
         
    }
}
