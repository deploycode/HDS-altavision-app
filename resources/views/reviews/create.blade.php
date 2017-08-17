@extends('layouts.dashboard')
@section('section')
  {!!Form::open(['route'=>'reviews.store' , 'method'=>'POST' , 'files'=>true ])!!}
    @include('reviews.forms.fields')
    <div class="form-group text-right">
      {!!Form::submit('Guardar' , ['class'=>'btn btn-success'])!!}
    </div>
  {!!Form::close()!!}
@endsection
