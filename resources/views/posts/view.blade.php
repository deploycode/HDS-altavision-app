@extends('layouts.post')
@section('section')
    <aside class="col-xs-12 col-sm-3">
      {{-- SCRIPT  --}}
        @section('autocomplete')
        <script type="text/javascript">
          $(document).ready(function(){
            src = "../autoComplete";
            $("#search").autocomplete({
              source: function(request, response) {
                  $.ajax({
                     url: src,
                     dataType: "json",
                     data: {term : request.term},
                     success: function(data){
                         response(data);
                     }
                  });
               }, min_length: 3,
               select: function( event, ui ) {
                  $('#search').val(ui.item.value);
                  location.href='/'+ui.item.menu+'/'+ui.item.post;
                  return false;
              }
            });
          });
        </script>
        @endsection
      {{-- SEARCH FORM --}}
      {!!Form::open(['method'=>'GET', 'class'=>'navbar-form' , 'id'=>'form_search'])!!}
        <div class="row">
          <div class="col-xs-9">
            {!!Form::text('title' , null , ['id'=>'search' ,'class'=>'form-control' , 'placeholder'=>'Buscar aquí ...' , 'aria-describedby'=> 'search'])!!}
          </div>
          <div class="col-xs-3">
            {!! Form::button('<span class="glyphicon glyphicon-search"></span>', ['id'=>'btn_search','type' => 'submit', 'class'=>' form-control btn btn-primary']) !!}
          </div>
        </div>

      {!!Form::close()!!}
      {{-- FIRSTS MENU --}}
      <div class="list-group">
        @if (count($firstPosts)>0)
            @foreach ($firstPosts as $firstposts)
              <a href="{{ URL::to($firstposts->firstMenu->slug, $firstposts->slug) }}" class="list-group-item"
                @if (isset($_GET['title']))
                  id="mi_result"
              @endif>{{$firstposts->title}}</a>
            @endforeach
        @elseif (isset($_GET['title']))
          <a href="{{ URL::to($post->firstMenu->slug, $post->slug) }}" class="list-group-item" id="mi_result">Sin resultados. Regresar</a>
        @endif
      </div>
      {{-- SECONDS MENUS --}}
      @if (isset($secondMenus ) && empty($_GET['title']))
        <ul class="nav" id="side-menu">
          @foreach ($secondMenus as $menu)
            <li>
              <a href="#"><i class="">{!!$menu->name!!}</i><span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                @foreach ($secondPosts as $poste)
                  @if ($menu->id == $poste->second_menu_id )
                    <li>
                      @if ($poste->id != $post->id)
                        <a  href="{{ URL::to($poste->firstMenu->slug, $poste->slug) }}" ><i class=''></i> {!!$poste->title!!}</a>
                      @else
                        <span class="active">{!!$poste->title!!}</span>
                      @endif
                    </li>
                  @endif
                @endforeach
              </ul>
            </li>
          @endforeach
        </ul>
      @endif
    </aside>
    {{-- CONTENIDO --}}
    <article class="col-xs-12 col-sm-9" id="mainContent">
      <h1>{!!$post->title!!}</h1>
      <div id="post_content">
        {!!$post->content!!}
      </div>
    </article>
    {{-- BOTON --}}
    @if ($post->firstMenu->slug == 'enfermedades-visuales' && empty($post->secondMenu->slug))
      <div class="pull-right">
        <?php
        $enfermedad=str_replace("-","",$post->slug);
        $path= 'http://www.'. $enfermedad . '.com.co';
        ?>
        <a href="{{$path}}" class="btn btn-success" target="_blank">Hablemos de {{$post->title}}</a>
      </div>
    @endif
@endsection
