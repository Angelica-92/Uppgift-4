<?php
namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;
class ReviewsController extends Controller
{

  public function create(Request $request)
  {
      return view("reviews.create", [
        "product_id" => $request->get("product_id")
      ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $review = new Review;
    $review->name = $request->get("name");
    $review->grade = $request->get("grade");
    $review->comment = $request->get("comment");
    $review->product_id = $request->get("product_id");
    $review->type = $request->get("type");
    $review->save();
    return redirect()->action('HomeController@index', ['id' =>   $review->product_id])->with('status', 'Comment saved!');
  }
}
