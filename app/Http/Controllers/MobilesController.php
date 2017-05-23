<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mobile;
use App\Store;

class MobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
         {
            //   $this->middleware('auth', ['except' => ['index','show']]);
         }

    public function index()
    {
        $mobiles = Mobile::all();
        return view("mobiles.index",[
          "mobiles" => $mobiles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("mobiles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobile = new Mobile;
        $mobile->title = $request->get("title");
        $mobile->brand = $request->get("brand");
        $mobile->image = $request->get("image");
        $mobile->description = $request->get("description");
        $mobile->price = $request->get("price");
        $mobile->save();

      /*  $product_id = DB::connection()->getPdo()->lastInsertId();
              foreach ($request->get("stores") as $store) {
                  DB::table('product_id')->insert(
                    [
                      "product_id" => $product_id,
                      "store_id" => $store
                    ]
                  );
              }

*/

       return redirect()-> action('MobilesController@index')->with('status', 'Mobile saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobile = Mobile::find($id);
        $mobile->stores = $mobile->stores;
        $mobile->reviews = $mobile->reviews;
        return view("mobiles.show", [
          "mobile" => $mobile
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobile = Mobile::find($id);
        return view("mobiles.edit", [
          "mobile" => $mobile
        ]);



        return redirect()->action('MobilesController@index')->with('status', 'Mobile updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mobile = Mobile::find($id);
        $mobile->title = $request->get("title");
        $mobile->brand = $request->get("brand");
        $mobile->price = $request->get("price");
        $mobile->description = $request->get("description");
        $mobile->image = $request->get("image");
        $mobile->save();


        return redirect()-> action('MobilesController@index')->with('status', 'Mobile updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mobile::destroy($id);
        return redirect()->action('MobilesController@index')->with('status', 'Mobile deleted');
    }
}
