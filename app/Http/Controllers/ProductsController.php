<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
  /*
  public $product;

public function __construct()
{
  $this->products = json_decode(file_get_contents("../resources/movies.json"));
}
*/
public function index()
{

  $products = Product::all();

  return response()->json($products);


}



public function show($id)
{
  //
  $product = Product::find($id);
  $product->title = $product->title;
  $product->brand = $product->brand;
  $product->price = $product->price;
  $product->description = $product->description;
  $product->image = $product->image;
  $product->reviews = $product->review;
  $product->stores = $product->store;


  return response()->json($product);


}

public function create(Request $request)
{
  $product = new Product;


  $product->title = $request->input("title");

  $product->brand = $request->input("brand");
  $product->price = $request->input("price");
  $product->image = $request->input("image");
  $product->description = $request->input("description");

  $product->save();


    foreach ($request->get("stores") as $store)
    {

      $product->store()->attach($store);

    }


    $response = array();
    $response["success"]=true;
    return response()->json($response);

  }
    //
}
