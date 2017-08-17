<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> {{$post->title}} </title>
    <meta name="description" content="{{substr(strip_tags($post->content) , 0 ,500)}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{!!asset('favicon.ico')!!}">
    <!-- import dashboard -->
    {!!Html::style('css/dashboard/metisMenu.min.css')!!}
    {!!Html::style('css/dashboard/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    <!-- import styles -->
    {!!Html::style('css/bootstrap/bootstrap.min.css')!!}
    {!!Html::style('css/animate.css')!!}
    {!!Html::style('css/main.css')!!}
    <!-- styles autocomplete -->
    {!!Html::style('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')!!}
    <link rel="stylesheet" media="(max-width: 768px)" href="{{ URL::to('css/mobile-styles.css') }}" />
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5888a5eabab87e66427a1a7c/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- ###################### -->
    <nav id="scrollspy"                     class="navbar navbar-default text-center mi-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-brand">
            <img src="{{asset('img/logo-altavision.png')}}" class="img img-responsive" width="100%" >
          </a>
        </div>
        <div class="collapse navbar-collapse " id="menu">
          <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/frecuencia-recomendada/frecuencia-recomendada') }}">Frecuencia Recomendada</a></li>
            <li><a href="{{ URL::to('/enfermedades-visuales/ambliopia') }}">Enfermedades Visuales</a></li>
            <li><a href="{{ URL::to('/enfermedades-sistemicas/artritis-reumatoide') }}">Enfermedades Sistémicas</a></li>
            <li><a href="{{ URL::to('/examenes/oct-tomografia-optica-coherente') }}">Exámenes</a></li>
            <li><a href="{{ URL::to('/cirugias-y-tratamientos/como-prepararse-para-una-cirugia') }}">Cirugías y tratamientos</a></li>
            <li><a href="{{ URL::to('/prevencion/brigadas-empresariales') }}">Prevención</a></li>
            <li><a href="{{ URL::to('/articulos/cuidando-mis-ojos-desde-los-0-hasta-los-150-anos') }}">Artículos</a></li>
            <li><a id="downToContact">Contáctenos</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- ###################### -->
    <ol class="breadcrumb">
        <label class="text-center">{!!$post->firstMenu->name!!}</label>
        <li><a href="{!!URL::to('/')!!}">Home</a></li>
        <li>{!!$post->firstMenu->name!!}</li>
        <li class="active">{!!$post->title!!}</li>
    </ol>
    <!-- ###################### -->
    <section      class="container">
      <section    id="internal-blog"  class="row">
        @yield('section')
      </section>
    </section>
    <!-- ###################### -->
    @include('contactenos')
    <!-- ###################### -->
    <section id="mapa"            >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.120275049058!2d-74.05404090564285!3d4.670947465722067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9af4a923560b%3A0x7d3f3806b89a62cd!2sCra.+14+%2386A-15%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2ses!4v1484573723417" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- ###################### -->
    <section id="subir"        class="col-xs-12 text-center">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </section>
    <!-- ###################### -->
    <section id="logos"                     class="row" >
      <div class="col-xs-12 col-md-4">
        <h4><img src="{!!asset('img/logo-altavision.png')!!}" class="img img-responsive" width="350px;" ></h4>
        <p>
          Somos experiencia, servicio y tecnología para mejorar su visión y prevenir las enfermedades visuales.
          Nos dedicamos exclusivamente a la solución de problemas oftalmológicos con un enfoque de alta calidad
          y responsabilidad para el cuidado de sus ojos. <font class="fuente-azul-cielo"> Nuestros servicios:</font> <br> <br>
          Valoración Oftalmológica 360°. <br>
          Cirugías oftalmológicas. <br>
          Adaptación y suministro de lentes de contacto y gafas.
        </p>
      </div>
      <div class="col-xs-12 col-md-4">
        <h4><img src="{!!asset('img\imagen-corporativa-hablemos-de-salud.png')!!}" alt="" class="img img-responsive"></h4>
        <p>
          Somos un equipo de personas que trabaja con amor, profesionalismo y un interés genuino por la salud de las
          familias colombianas. Educamos a nuestros pacientes a través de la entrega de información vital y la promoción
          de hábitos saludables. <br><br>
          Trabajamos con nuestras unidades de servicio bajo principios de efectividad, tecnología y confianza para
          garantizar el oportuno diagnóstico y tratamiento de las enfermedades con mayor impacto en la población
        </p>
      </div>
      <div class="col-xs-12 col-md-4">
        <h4>Subscríbete a nuestras publicaciones</h4>
        {!!Form::open(['route'=>'mail.store' , 'method'=>'POST'])!!}
          {!!Form::email('email', null,['placeholder'=>'Email', 'class'=>'form-control','required'])!!}
          {!!Form::button('Suscribirme' ,['type'=>'submit','class'=>'form-control btn btn-success'])!!}
        {!!Form::close()!!}
      </div>
    </section>
    <!-- ###################### -->
    <footer class="col-xs-12 azul-oscuro" >
      <p>
        Alta Visión: Cr 14 No. 86a - 15 Bogotá - Colombia PBX: 6164585 Opción: 5. E-mail: educacion@altavision.com.co<br>
        La información médica aquí descrita no remplaza una valoración oftalmológica.<br>
        La reproducción de texto o imagénes incluidas en este sitio web esta estrictamente prohibida. <br>
      </p>
    </footer>
    <!-- execute scripts javascript -->
    {!!Html::script('js/bootstrap/jquery.min.js')!!}
    {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
    {!!Html::script('js/waypoints.min.js')!!}
    {!!Html::script('js/main.js')!!}
    {!!Html::script('js/subir.js')!!}
    {!!Html::script('js/dashboard/metisMenu.min.js')!!}
    {!!Html::script('js/dashboard/sb-admin-2.js')!!}
    {!!Html::script('//code.jquery.com/ui/1.12.1/jquery-ui.js')!!}
    @yield('autocomplete')
  </body>
</html>
