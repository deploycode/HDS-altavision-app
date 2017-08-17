@extends('layouts.dashboard')
@section('section')
  @if (isset($firstmenu))
    {!!Form::model($firstmenu ,['route'=>['firstmenu.update' , $firstmenu->id], 'method'=>'PUT' , 'class'=>'formulario'])!!}
    @include('menu.forms.fields')
    <div class="form-group text-right">
      {!!Form::submit('Guardar cambios', ['class'=>'btn btn-success'])!!}
    </div>
    {!!Form::close()!!}
  @endif
  @if (isset($secondmenus))
    {!!Form::model($secondmenus ,['route'=>['secondmenu.update' , $secondmenus->id], 'method'=>'PUT' , 'class'=>'formulario'])!!}
    <div class="form-group">
      {!!Form::label('Menu')!!}
      {!!Form::select('first_menu_id', $firstlist ,null,['class'=>'form-control','placeholder'=>'Favor escoja un menu'])!!}
    </div>
    @include('menu.forms.fields')
    <div class="form-group text-right">
      {!!Form::submit('Guardar cambios', ['class'=>'btn btn-success'])!!}
    </div>
    {!!Form::close()!!}
  @endif
  @if (isset($thirdmenus))
    {!!Form::model($thirdmenus ,['route'=>['thirdmenu.update' , $thirdmenus->id], 'method'=>'PUT' , 'class'=>'formulario'])!!}
    <div class="form-group">
      {!!Form::label('Menu')!!}
      {!!Form::select('second_menu_id', $secondlist ,null,['class'=>'form-control','placeholder'=>'Favor escoja un menu'])!!}
    </div>
    @include('menu.forms.fields')
    <div class="form-group text-right">
      {!!Form::submit('Guardar cambios', ['class'=>'btn btn-success'])!!}
    </div>
    {!!Form::close()!!}
  @endif
@endsection
