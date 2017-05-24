<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tablet;
use App\Review;
use App\Store;

class TabletsController extends Controller
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
        $tablets = Tablet::all();
        return view("tablets.index",[
          "tablets" => $tablets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("tablets.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tablet = new Tablet;
        $tablet->title = $request->get("title");
        $tablet->brand = $request->get("brand");
        $tablet->image = $request->get("image");
        $tablet->description = $request->get("description");
        $tablet->price = $request->get("price");
        $tablet->save();

        /*$product_id = DB::connection()->getPdo()->lastInsertId();
              foreach ($request->get("stores") as $store) {
                  DB::table('product_id')->insert(
                    [
                      "product_id" => $product_id,
                      "store_id" => $store
                    ]
                  );
              }
*/


       return redirect()-> action('TabletsController@index')->with('status', 'Tablet saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tablet = Tablet::find($id);
        $review = Review::tablet();

        //$tablet->stores = $tablet->stores;
        //$tablet->reviews = $tablet->reviews;
        return view("tablets.show", [
          "tablet" => $tablet,
          "review" => $review
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
        $tablet = Tablet::find($id);
        return view("tablets.edit", [
          "tablet" => $tablet
        ]);



        return redirect()->action('TabletsController@index')->with('status', 'Tablet updated');
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
        $tablet = Tablet::find($id);
        $tablet->title = $request->get("title");
        $tablet->brand = $request->get("brand");
        $tablet->price = $request->get("price");
        $tablet->description = $request->get("description");
        $tablet->image = $request->get("image");
        $tablet->save();


        return redirect()-> action('TabletsController@index')->with('status', 'Tablet updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tablet::destroy($id);
        return redirect()->action('TabletsController@index')->with('status', 'Tablet deleted');
    }
}
