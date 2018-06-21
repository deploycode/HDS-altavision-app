@extends('layouts.dashboard')
@section('section')
  <table class="table">
    <thead>
      <th>Nombre</th>
      <th>Acciones</th>
    </thead>
    @foreach ($reviews as $review)
      <tbody>
        <td>{{$review->name}}</td>
        <td>
          {!!Form::open(['route'=>['reviews.destroy',$review->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('reviews.edit', $review->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
                {!! Form::button('<span class="glyphicon glyphicon-trash"></span>',
                [
                    'type' => 'button',
                    'class'=>'btn btn-danger',
                    'onclick' => 'if(confirm("¿Realmente desea eliminar este elemento? ")) {  $(form).submit(); }',
                ]) !!}
            </div>
          {!!Form::close()!!}
        </td>
      </tbody>
    @endforeach
  </table>
@endsection
