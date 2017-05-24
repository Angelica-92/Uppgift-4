<?php

namespace App\Http\Controllers;

use App\Store;
//use App\Store;
//use App\Review;
use Illuminate\Support\Facades\DB;

class StoresController extends Controller
{

  public function index()
  {
      $stores = Store::all();
      return view("stores",[
        "stores" => $stores
      ]);
  }
  public function show($id)
  {
      $store = Store::find($id);
      $store->mobiles = $store->mobiles;
      $store->tablets = $store->tablets;
      $store->computers = $store->computers;

      return view("stores", [
        "store" => $store
      ]);

  }

}
