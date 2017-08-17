<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\User;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Requests\UserCreateRequest;
use altavisionApp\Http\Requests\UserUpdateRequest;
use altavisionApp\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    ////////////////////////////////////////////////////////////////
    public function index()
    {
      $users= User::all();
      return view('users.index', compact('users'));
    }
    //////////////////////////////////////////////////////////////////
    public function create()
    {
      return view('users.create');
    }
    ////////////////////////////////////////////////////////////////
    public function store(UserCreateRequest $request)
    {
      User::create($request->all());
      flash('Usuario creado satisfactoriamente', 'success');
      return redirect('users');
    }
    ////////////////////////////////////////////////////////////////
    public function show($id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////
    public function edit($id)
    {
      $user= User::find($id);
      return view('users.edit', ['user'=>$user]);
    }
    ////////////////////////////////////////////////////////////////
    public function update(UserUpdateRequest $request, $id)
    {
      $user= User::find($id);
      $user->fill($request->all());
      $user->save();
      flash('Usuario actualizado satisfactoriamente', 'success');
      return redirect('users');
    }
    ////////////////////////////////////////////////////////////////
    public function destroy($id)
    {
      User::destroy($id);
      flash('Usuario eliminado satisfactoriamente', 'success');
      return redirect('users');
    }
}
