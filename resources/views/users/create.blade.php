@extends('layouts.dashboard')
@section('section')
  @include('requests')
  {!!Form::open(['route'=>'users.store','method'=>'POST' , 'class'=>'formulario'])!!}
    @include('users.forms.fields')
    <div class="form-group">
      {!!Form::submit('Registrar usuario', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
