@extends('layouts.dashboard')
@section('section')
  {!!Form::model($review ,['route'=>['reviews.update', $review->id] , 'method'=>'PUT'])!!}
    @include('reviews.forms.fields')
    <div class="form-group text-right">
      {!!Form::submit('Guardar' , ['class'=>'btn btn-success'])!!}
    </div>
  {!!Form::close()!!}
@endsection
