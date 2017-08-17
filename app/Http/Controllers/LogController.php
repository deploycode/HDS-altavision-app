<?php

namespace altavisionApp\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Requests\LogRequest;
use altavisionApp\Http\Controllers\Controller;

class LogController extends Controller
{
    public function index()
    {
      return view('login');
    }
    //////////////////////////////////////////////////////////////////////////////////////
    public function store(LogRequest $request)
    {
      if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
        return Redirect('/admin');
      }
      flash('Favor verifique sus datos de ingreso','danger');
      return Redirect('/login');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////
    public function logout()
    {
      Auth::logout();
      return Redirect('/');
    }

}
