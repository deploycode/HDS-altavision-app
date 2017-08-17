<div class="row form-group">
  <div class="col-xs-2">
    <img src="{{asset('img/man-one.png')}}" alt="">
    {!!Form::radio('photo', 'man-one.png', null)!!}
  </div>
  <div class="col-xs-2">
    <img src="{{asset('img/man-two.png')}}" alt="">
    {!!Form::radio('photo', 'man-two.png', null)!!}
  </div>
  <div class="col-xs-2">
    <img src="{{asset('img/man-three.png')}}" alt="">
    {!!Form::radio('photo', 'man-three.png', null)!!}
  </div>
  <div class="col-xs-2">
    <img src="{{asset('img/woman-one.png')}}" alt="">
    {!!Form::radio('photo', 'woman-one.png', null)!!}
  </div>
  <div class="col-xs-2">
    <img src="{{asset('img/woman-two.png')}}" alt="">
    {!!Form::radio('photo', 'woman-two.png', null)!!}
  </div>
  <div class="col-xs-2">
    <img src="{{asset('img/woman-three.png')}}" alt="">
    {!!Form::radio('photo', 'woman-three.png', null)!!}
  </div>
</div>
<div class="form-group">
  {!!Form::label('Nombre')!!}
  {!!Form::text('name', null,['class'=>'form-control' , 'placeholder'=>'Favor ingrese el nombre'])!!}
</div>
<div class="form-group">
  {!!Form::label('Opinion')!!}
  {!!Form::textarea('review', null , ['class'=>'form-control'])!!}
</div>
