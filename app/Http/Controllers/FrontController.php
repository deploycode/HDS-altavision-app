<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\Review;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct(){
      $this->middleware('auth' , ['only'=>'admin']);
    }
    //////////////////////////////////////////////
    public function index()
    {
      $reviews=Review::all();
      return view('index', ['reviews'=>$reviews]);
    }
    //////////////////////////////////////////////
    public function admin()
    {
      return view('dashboard');
    }
    //////////////////////////////////////////////
    public function whatsapp()
    {
      return view('whatsapp');
    }
    //////////////////////////////////////////////
    public function estados2017()
    {
      return view('estados2017');
    }
}
