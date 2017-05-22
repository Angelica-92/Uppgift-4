<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Computer;

class ComputersController extends Controller
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
        $computers = Computer::all();
        return view("computers.index",[
          "computers" => $computers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("computers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computer = new Computer;
        $computer->title = $request->get("title");
        $computer->brand = $request->get("brand");
        $computer->image = $request->get("image");
        $computer->description = $request->get("description");
        $computer->price = $request->get("price");
        $computer->save();

        /*$product_id = DB::connection()->getPdo()->lastInsertId();
              foreach ($request->get("stores") as $store) {
                  DB::table('product_store')->insert(
                    [
                      "product_id" => $product_id,
                      "store_id" => $store
                    ]
                  );
              }
              */


       return redirect()-> action('ComputersController@index')->with('status', 'Computer saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computer = Computer::find($id);
        $computer->stores = $computer->stores;
        $computer->reviews = $computer->reviews;
        return view("computers.show", [
          "computer" => $computer
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
        $computer = Computer::find($id);
        return view("computers.edit", [
          "computer" => $computer
        ]);



        return redirect()->action('ComputersController@index')->with('status', 'Computer updated');
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
        $computer = Computer::find($id);
        $computer->title = $request->get("title");
        $computer->brand = $request->get("brand");
        $computer->price = $request->get("price");
        $computer->description = $request->get("description");
        $computer->image = $request->get("image");
        $computer->save();


        return redirect()-> action('ComputersController@index')->with('status', 'Computer updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Computer::destroy($id);
        return redirect()->action('ComputersController@index')->with('status', 'Computer deleted');
    }
}
