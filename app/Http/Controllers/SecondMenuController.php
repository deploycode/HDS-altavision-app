<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\ThirdMenu;
use altavisionApp\SecondMenu;
use altavisionApp\FirstMenu;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class SecondMenuController extends Controller
{
  //////////////////////////////////////////////////////////////////
  public function index()
  {
    $secondmenus=SecondMenu::all();
    return view('menu.index' ,['secondmenus'=>$secondmenus]);
  }
  //////////////////////////////////////////////////////////////////
  public function create()
  {
    $firstlist=FirstMenu::lists('name','id');
    return view('menu.create', ['firstlist'=>$firstlist]);
  }
  //////////////////////////////////////////////////////////////////
  public function store(Request $request)
  {
    SecondMenu::create($request->all());
    Flash('Menu creado satisfactoriamente','success')->important();
    return redirect('secondmenu');
  }
  //////////////////////////////////////////////////////////////////
  public function show($id)
  {
      //
  }
  //////////////////////////////////////////////////////////////////
  public function edit($id)
  {
    $secondmenus=SecondMenu::find($id);
    $firstlist=FirstMenu::lists('name','id');
    return view('menu.edit',['secondmenus'=>$secondmenus , 'firstlist'=>$firstlist]);
  }
  //////////////////////////////////////////////////////////////////
  public function update(Request $request, $id)
  {
    $secondmenus=SecondMenu::find($id);
    $secondmenus->fill($request->all());
    $secondmenus->save();
    flash('Menu actualizado satisfactoriamente', 'success')->important();
    return Redirect('secondmenu');
  }
  //////////////////////////////////////////////////////////////////
  public function destroy($id)
  {
    SecondMenu::destroy($id);
    Flash('Menu eliminado satisfactoriamente' , 'success')->important();
    return redirect('secondmenu');
  }
  public function getThirdsMenus(Request $request, $id){
    if ($request->ajax()) {
      $thirdsmenus=ThirdMenu::thirdsmenus($id);
      return response()->json($thirdsmenus);
    }
  }
}
