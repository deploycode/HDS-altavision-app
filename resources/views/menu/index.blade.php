@extends('layouts.dashboard')
@section('section')
  <table class="table">
    @if (isset($firstmenus))
      <thead>
        <th>Nombre</th>
        <th>Operaciones</th>
      </thead>
      @foreach ($firstmenus as $firstmenu)
        <tbody>
          <td>{{$firstmenu->name}}</td>
          <td>
            {!!Form::open(['route'=>['firstmenu.destroy',$firstmenu->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('firstmenu.edit', $firstmenu->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
            {!!Form::close()!!}
          </td>
        </tbody>
      @endforeach
    @endif

    @if (isset($secondmenus))
      <thead>
        <th>Nombre</th>
        <th>Menu</th>
        <th>Operaciones</th>
      </thead>
      @foreach ($secondmenus as $secondmenu)
        <tbody>
          <td>{{$secondmenu->name}}</td>
          <td>{{$secondmenu->firstmenu->name}}</td>
          <td>
            {!!Form::open(['route'=>['secondmenu.destroy',$secondmenu->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('secondmenu.edit', $secondmenu->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
            {!!Form::close()!!}
          </td>
        </tbody>
      @endforeach
    @endif

    @if (isset($thirdmenus))
      <thead>
        <th>Nombre</th>
        <th>Submenu</th>
        <th>Menu</th>
        <th>Operaciones</th>
      </thead>
      @foreach ($thirdmenus as $thirdmenu)
        <tbody>
          <td>{{$thirdmenu->name}}</td>
          <td>{{$thirdmenu->secondmenu->name}}</td>
          <td>{{$thirdmenu->secondmenu->firstmenu->name}}</td>
          <td>
            {!!Form::open(['route'=>['thirdmenu.destroy',$thirdmenu->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('thirdmenu.edit', $thirdmenu->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
            {!!Form::close()!!}
          </td>
        </tbody>
      @endforeach
    @endif
  </table>
@endsection
