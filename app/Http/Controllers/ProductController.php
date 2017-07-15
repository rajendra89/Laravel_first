<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function index(){

    	$products=Products::paginate(3);
    	//$products=Products::all();

    	return view('list',compact('products'));
    }

    public function create(){	

		return view('new');
	}

	public function store(Request $request){

		$product= new Products;

		$product->name = $request['name'];
		$product->price = $request['price'];
		$product->description = $request['description'];
		$product->image = '';

		$product->save();

		return redirect('products');


		
	}
}
