<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\FirstMenu;
use altavisionApp\SecondMenu;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class FirstMenuController extends Controller
{
    //////////////////////////////////////////////////////////////////
    public function index()
    {
      $firstmenus=FirstMenu::all();
      return view('menu.index' ,['firstmenus'=>$firstmenus]);
    }
    //////////////////////////////////////////////////////////////////
    public function create()
    {
      $firstmenus=FirstMenu::all();
      return view('menu.create',['firstmenus'=>$firstmenus]);
    }
    //////////////////////////////////////////////////////////////////
    public function store(Request $request)
    {
      FirstMenu::create($request->all());
      Flash('Menu creado satisfactoriamente','success')->important();
      return redirect('firstmenu');
    }
    //////////////////////////////////////////////////////////////////
    public function show($id)
    {
        //
    }
    //////////////////////////////////////////////////////////////////
    public function edit($id)
    {
      $firstmenu=FirstMenu::find($id);
      return view('menu.edit',['firstmenu'=>$firstmenu]);
    }
    //////////////////////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
      $firstmenu=FirstMenu::find($id);
      $firstmenu->fill($request->all());
      $firstmenu->save();
      flash('Menu actualizado satisfactoriamente', 'success')->important();
      return Redirect('firstmenu');
    }
    //////////////////////////////////////////////////////////////////
    public function destroy($id)
    {
      FirstMenu::destroy($id);
      Flash('menu eliminado satisfactoriamente' , 'success')->important();
      return redirect('firstmenu');
    }
    public function getSecondsMenus(Request $request, $id){
      if ($request->ajax()) {
        $secondsmenus=SecondMenu::secondsmenus($id);
        return response()->json($secondsmenus);
      }
    }
}
