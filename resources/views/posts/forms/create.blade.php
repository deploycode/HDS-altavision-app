  <div class="form-group">
    {!!Form::label('Menu de primer nivel')!!}
    {!!Form::select('first_menu_id', $firstlist, null,['id'=>'slc_firstmenu','class'=>'form-control'])!!}
  </div>

  <div class="form-group" id="div_second_menu" style="display:none">
    {!!Form::label('Menu de segundo nivel')!!}
    <select id="slc_secondmenu" name="second_menu_id" class="form-control">
    </select>
  </div>

  <div class="form-group" id="div_third_menu" style="display:none">
    {!!Form::label('Menu de tercer nivel')!!}
    <select id="slc_thirdmenu" name="third_menu_id" class="form-control">
    </select>
  </div>

<div class="form-group">
  {!!Form::label('Título')!!}
  {!!Form::text('title', null,['class'=>'form-control' , 'placeholder'=>'Favor ingrese el título del Post'])!!}
</div>
<div class="form-group">
  {!!Form::label('Contenido')!!}
  {!!Form::textarea('content', null , ['id'=>'txa', 'class'=>'form-control'])!!}
</div>
