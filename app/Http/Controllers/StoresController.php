<?php

namespace App\Http\Controllers;

use App\Store;

use Illuminate\Support\Facades\DB;


class StoresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
      $stores = Store::all();
      return response()->json($stores);

      // foreach ($request->get("stores") as $store)
      // {
      //
      //
      // }
    }
    //
}
