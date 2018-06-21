@extends('layouts.dashboard')
@section('section')
  {!!Form::open([ 'route'=>'posts.index' , 'method'=>'GET', 'class'=>'navbar-form'])!!}
    <div class="input-group">
      {!!Form::text('name' , null , ['class'=>'form-control' , 'placeholder'=>'Buscar aquí ...' , 'aria-describedby'=> 'search'])!!}
      <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    </div>
  {!!Form::close()!!}
  <table class="table">
    <thead>
      <th>Título</th>
      <th>Menu</th>
      <th>Acciones</th>
    </thead>
    @foreach ($posts as $post)
      <tbody>
        <td>{{$post->title}}</td>
        <td>{{$post->firstmenu->name}}</td>
        <td>
          {!!Form::open(['route'=>['posts.destroy',$post->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('posts.show', $post->slug) }}"><i class="btn btn-success glyphicon glyphicon-eye-open"></i></a>
              <a href="{{ route('posts.edit', $post->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
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
