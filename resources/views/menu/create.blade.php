@extends('layouts.dashboard')
@section('section')
  @if (isset($firstmenus))
    {!!Form::open(['route'=>'firstmenu.store', 'method'=>'POST' , 'class'=>'formulario'])!!}
    @include('menu.forms.fields')
    <div class="form-group text-right">
      {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
    </div>
    {!!Form::close()!!}
  @endif
  {{-- ////////////////////////////////////////////////////////////////// --}}
  @if (isset($firstlist))
    {!!Form::open(['route'=>'secondmenu.store', 'method'=>'POST' , 'class'=>'formulario'])!!}
        <div class="form-group">
          {!!Form::label('Menu')!!}
          {!!Form::select('first_menu_id', $firstlist ,null,['class'=>'form-control','placeholder'=>'Favor escoja un menu'])!!}
        </div>
      @include('menu.forms.fields')
      <div class="form-group text-right">
        {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
      </div>
    {!!Form::close()!!}
  @endif
  {{-- ////////////////////////////////////////////////////////////////// --}}
  @if (isset($secondlist))
    <hr>
    {!!Form::open(['route'=>'thirdmenu.store', 'method'=>'POST' , 'class'=>'formulario'])!!}
        <div class="form-group">
          {!!Form::label('Menu')!!}
          {!!Form::select('second_menu_id', $secondlist ,null,['class'=>'form-control','placeholder'=>'Favor escoja un menu'])!!}
        </div>
      @include('menu.forms.fields')
      <div class="form-group text-right">
        {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
      </div>
    {!!Form::close()!!}
  @endif
@endsection
