<?php
/**
* 
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Product;


class CatagoloController extends Controller
{
	
	public function home(){

		$products = Product::all();
		return view('catalogo.home',["products"=>$products]);

	}
}