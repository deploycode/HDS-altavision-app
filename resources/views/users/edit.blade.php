@extends('layouts.dashboard')
@section('section')
  @include('requests')
  {!!Form::model($user,['route'=>['users.update', $user->id], 'method'=>'PUT', 'class'=>'formulario'])!!}
    @include('users.forms.fields')
    <div class="form-group">
      {!!Form::submit('Actualizar usuario', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
