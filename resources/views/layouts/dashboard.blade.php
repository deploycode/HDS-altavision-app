<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel de Administración</title>
  <link rel="icon" href="{!!asset('favicon.ico')!!}">
  {!!Html::style('css/bootstrap/bootstrap.min.css')!!}
  {!!Html::style('css/dashboard/metisMenu.min.css')!!}
  {!!Html::style('css/dashboard/sb-admin-2.css')!!}
  {!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{!!URL::to('/')!!}">Panel Administración</a>
      </div>
      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            {!!Auth::user()->name!!}
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li>
              <a href="{!!URL::to('users/'.Auth::user()->id .'/edit')!!}"><i class="fa fa-gear fa-fw"></i> Editar</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li>
              <a href="#"><i class="glyphicon glyphicon-list"></i> Menus de primer nivel<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{!!URL::to('/firstmenu/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                </li>
                <li>
                  <a href="{!!URL::to('/firstmenu')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="glyphicon glyphicon-list"></i> Menus de segundo nivel<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{!!URL::to('/secondmenu/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                </li>
                <li>
                  <a href="{!!URL::to('/secondmenu')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="glyphicon glyphicon-list"></i> Menus de tercer nivel<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{!!URL::to('/thirdmenu/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                </li>
                <li>
                  <a href="{!!URL::to('/thirdmenu')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="glyphicon glyphicon-book"></i> Posts<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{!!URL::to('/posts/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                </li>
                <li>
                  <a href="{!!URL::to('/posts')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="glyphicon glyphicon-user"></i> Usuarios<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{!!URL::to('/users/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                </li>
                <li>
                  <a href="{!!URL::to('/users')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="glyphicon glyphicon-star"></i> Opiniones<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{!!URL::to('/reviews/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                </li>
                <li>
                  <a href="{!!URL::to('/reviews')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="page-wrapper">
      @include('flash::message')
      @include('requests')
      @yield('section')
    </div>
  </div>
  {!!Html::script('js/bootstrap/jquery.min.js')!!}
  {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
  {!!Html::script('js/dashboard/metisMenu.min.js')!!}
  {!!Html::script('js/dashboard/sb-admin-2.js')!!}
  {!!Html::script('js/dinamics-selects.js')!!}
</body>
</html>
