<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class MailController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
      $data = array (
        'email'		=>	$request->email,
      );
      Mail::send('mail.contact' , $data, function($msj){
        $msj->subject('Contacto de Alta Visión');
        $msj->to('promocionyprevencion@hablemosdesalud.com.co');
      });
      flash('Se ha suscrito satisfactorimente' , 'success')->important();
      return redirect('/');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
