<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
    	return view('viewPrint');
    }
    public function printPreview()

    {
    	$products=Product::all();

    	return view('printPreview',compact(products));
    }

}
