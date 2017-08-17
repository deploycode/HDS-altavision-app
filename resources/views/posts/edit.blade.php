@extends('layouts.dashboard')
@section('section')
  {!!Form::model($post ,['route'=>['posts.update', $post->id] , 'method'=>'PUT' , 'class'=>'formulario'])!!}
    @include('posts.forms.edit')
    <div class="form-group text-right">
      {!!Form::submit('Guardar cambios' , ['class'=>'btn btn-success'])!!}
    </div>
  {!!Form::close()!!}
  {!!Html::script('plugins/ckeditor/ckeditor.js')!!}
  {!!Html::script('plugins/ckfinder/ckfinder.js')!!}
  <script>
    CKEDITOR.replace( 'txa',
    {
      filebrowserBrowseUrl        : '../../plugins/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl   : '../../plugins/ckfinder/ckfinder.html?type=Images',
      filebrowserUploadUrl        : '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl   : '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
  </script>
@endsection
