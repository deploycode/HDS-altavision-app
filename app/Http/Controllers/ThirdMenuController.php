<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\SecondMenu;
use altavisionApp\ThirdMenu;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class ThirdMenuController extends Controller
{
  //////////////////////////////////////////////////////////////////
  public function index()
  {
    $thirdmenus=ThirdMenu::all();
    return view('menu.index' ,['thirdmenus'=>$thirdmenus]);
  }
  //////////////////////////////////////////////////////////////////
  public function create()
  {
    $secondlist=SecondMenu::lists('name','id');
    return view('menu.create', ['secondlist'=>$secondlist]);
  }
  //////////////////////////////////////////////////////////////////
  public function store(Request $request)
  {
    ThirdMenu::create($request->all());
    Flash('Menu creado satisfactoriamente','success')->important();
    return redirect('thirdmenu');
  }
  //////////////////////////////////////////////////////////////////
  public function show($id)
  {
      //
  }
  //////////////////////////////////////////////////////////////////
  public function edit($id)
  {
    $thirdmenus=ThirdMenu::find($id);
    $secondlist=SecondMenu::lists('name','id');
    return view('menu.edit',['thirdmenus'=>$thirdmenus , 'secondlist'=>$secondlist]);
  }
  //////////////////////////////////////////////////////////////////
  public function update(Request $request, $id)
  {
    $thirdmenu=ThirdMenu::find($id);
    $thirdmenu->fill($request->all());
    $thirdmenu->save();
    flash('Menu actualizado satisfactoriamente', 'success')->important();
    return Redirect('thirdmenu');
  }
  //////////////////////////////////////////////////////////////////
  public function destroy($id)
  {
    ThirdMenu::destroy($id);
    Flash('Menu eliminado satisfactoriamente' , 'success')->important();
    return redirect('thirdmenu');
  }
}
