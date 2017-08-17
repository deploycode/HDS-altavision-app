<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\Review;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function index()
    {
      $reviews=Review::all();
      return view('reviews.index', ['reviews'=>$reviews]);
    }
    public function create()
    {
      return view('reviews.create');
    }
    public function store(Request $request)
    {
      Review::create($request->all());
      Flash('Post creado satisfactoriamente' , 'success');
      return Redirect('reviews');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
      $review= Review::find($id);
      return view('reviews.edit',['review'=>$review]);
    }
    public function update(Request $request, $id)
    {
      $review=Review::find($id);
      $review->fill($request->all());
      $review->save();
      flash('Opinion actualizada satisfactoriamente', 'success');
      return Redirect('reviews');
    }
    public function destroy($id)
    {
        //
    }
}
