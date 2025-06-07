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
        dd($request);
        
    }
}
