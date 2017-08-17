@extends('layouts.main')
@section('section')
  <!-- ###################### -->
  <div id="carousel-example-generic"  class="carousel slide mi-carrusel hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      {{-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> --}}
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      {{-- <div class="item ">
        <img src="img/header1.jpg" alt="...">
      </div> --}}
      <div class="item active">
        <img src="img/header2.jpg" alt="...">
      </div>
      <div class="item">
        <img src="img/header3.jpg" alt="...">
      </div>
    </div>
  </div>
  <!-- ###################### -->
  <section id="proceso-de-consulta"       class="sheet azul-cielo" >
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-push-6 pag-image">
        <img src="img\articulo-valoracion-360.jpg" class="imagen50 img img-responsive">
      </div>
      <div class="col-xs-12 col-sm-6 col-sm-pull-6 pag">
        <h1>Frecuencia recomendada de visita al oftalmólogo</h1>
        <p>
          Contamos con asesoría y consulta de 360° en salud visual para
          entregar resultados confiables y completos sobre el estado de su visión.
        </p>
        <a href="{{asset('/frecuencia-recomendada/frecuencia-recomendada')}}" class="btn boton">Ver más</a>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <section id="enfermedades-visuales"     class="sheet naranja">
    <div class="row">
      <div class="col-xs-12 col-sm-6 pag-image">
        <img src="img\articulo-enfermedades-visuales-en-alta-vision.jpg" alt="" class="imagen50 img img-responsive">
      </div>
      <div class="col-xs-12 col-sm-6 pag ">
        <h1>Enfermedades <br> Visuales</h1>
        <p>
          Nuestros ojos están propensos a numerosas enfermedades que pueden presentarse
          si ningún síntoma. Conozca cómo prevenir y tratar estas enfermedades para tener
          una visión óptima y saludable toda la vida.
        </p>
        <a href="{{asset('/enfermedades-visuales/ambliopia')}}" class="boton btn">Ver más</a>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <section id="enfermedades-sistemicas"   class="sheet azul-cielo-oscuro">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-push-6 pag-image">
        <img src="img\articulo-enfermedades-sistemicas-en-alta-vision.jpg" alt="" class="imagen50 img img-responsive">
      </div>
      <div class="col-xs-12 col-sm-6 col-sm-pull-6 pag ">
        <h1>Enfermedades <br> Sistémicas</h1>
        <p>
          Las enfermedades que afectan todo el cuerpo como la diabetes, la hipertensión arterial, la artritis reumatoide, el hipotiroidismo, lupus entre otras, afectan de manera degenerativa nuestra visión. La prevención y el diagnóstico oportuno, evitan que estas enfermedades nos lleven a perder la visión de manera irreversible.
        </p>
        <a href="{{asset('/enfermedades-sistemicas/enfermedades-que-afectan-los-ojos')}}" class="btn boton ">Ver más</a>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <section id="examenes"                  class="sheet">
    <div class="row">
      <div class="col-xs-12 col-sm-6 pag-image">
        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img\equipo-biometria.jpg" alt="...">
            </div>
            <div class="item">
              <img src="img\equipo-campo-visual.jpg" alt="...">
            </div>
            <div class="item">
              <img src="img\equipo-oct.jpg" alt="...">
            </div>
            <div class="item">
              <img src="img\equipo-pentacam.jpg" alt="...">
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 pag text-center" >
        <h1>Exámenes</h1>
        <p>
          Contamos con tecnología de punta para lograr resultados precisos y de alta calidad.
        </p>
        <div class="examenes-icons">
          <div class="col-xs-6">
            <a href="http://www.altavision.co/examenes/biometria">
              <img src="img\dibujo-lineal-equipo-utilizado-para-biometria.png" class="img img-responsive">
              Biometría
            </a>
          </div>
          <div class="col-xs-6">
            <a class="examenLink"href="http://www.altavision.co/examenes/campo-visual-humphrey">
              <img src="img\dibujo-lineal-equipo-utilizado-para-campo-visual.png" class="examenIcon img img-responsive">
              Campo Visual
            </a>
          </div>
          <div class="col-xs-6">
            <a class="examenLink"href="http://www.altavision.co/examenes/pentacam">
              <img src="img\dibujo-lineal-de-equipo-utilizado-para-pentacam.png" class="examenIcon img img-responsive">
              Pentacam
            </a>
          </div>
          <div class="col-xs-6">
            <a class="examenLink"href="http://www.altavision.co/examenes/oct-para-glaucoma">
              <img src="img\dibujo-lineal-equipo-utiizado-para-OCT.png" class="examenIcon img img-responsive">
              OCT
            </a>
          </div>
        </div>
        <div class="col-xs-12">
          <a href="{!!URL::to('examenes/oct-tomografia-optica-coherente')!!}" class="btn boton">Ver más</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <section id="cirugias-y-tratamientos"   class="sheet azul-oscuro">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-push-6 pag-image">
        <img src="img\articulo-cirugias-y-tratamientos-en-alta-vision.jpg" alt="" class="imagen50 img img-responsive">
      </div>
      <div class="col-xs-12 col-sm-6 col-sm-pull-6 pag">
        <h1>Cirugías y <br> tratamientos</h1>
        <p style="text-align:center!important">
          Sus ojos en manos expertas.
        </p>
        <a href="{!!URL::to('/cirugias-y-tratamientos/como-prepararse-para-una-cirugia')!!}" id="btnCirugias" class="btn boton">Ver más</a>
      </div>
    </div>
  </section>
  <!-- ###################### -->
  <section id="prevencion"                class="sheet verde-claro">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  text-center">
            <h1 class="fuente-blanca">Prevención</h1>
          </div>
        </div>
        <div class="row row-note">
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/prevencion/brigadas-empresariales')!!}">
              <img src="img\articulo-brigadas-empresariales-alta-vision.jpg" class="img-caption" alt="">
              <div class="caption">
                <h2>Brigadas empresariales</h2>
                <p>Apoyamos a nuestras empresas en actividades de salud para sus empleados.</p>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/prevencion/como-funcionan-nuestros-ojos')!!}">
              <img src="img\articulo-material-educativo-de-altavision.jpg" class="img-caption" alt="">
              <div class="caption">
                <h2>Material educativo</h2>
                <p>Información de interés para para usted, su familia, amigos y sus empleados.</p>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('prevencion/guia-para-detectar-problemas-visuales-en-sus-alumnos')!!}">
              <img src="img\articulo-salud-visual-para-docentes.jpg" class="img-caption" alt="">
              <div class="caption">
                <h2>Salud visual para docentes</h2>
                <p>Conozca cómo ayudar a sus alumnos para tener una buena visión para toda la vida.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <a href="{!!URL::to('/prevencion/brigadas-empresariales')!!}" class="btn boton">Ver más</a>
          </div>
        </div>
      </div>
  </section>
  <!-- ###################### -->
  <section id="articulos"                 class="sheet gris">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  text-center">
            <h1 class="fuente-azul-oscuro">Artículos</h1>
          </div>
        </div>
        <div class="row row-note">
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/articulos/cuidando-mis-ojos-desde-los-0-hasta-los-150-anos')!!}">
            <img src="img\articulo-cuidando-mis-ojos-desde-los-0-hasta-los-100-anios.jpg" class="img-caption" alt="">
            <div class="col-xs-4 col-sm-3  caption-date" style="background-color:#c5d327;">
              <p>
                30 <br> Enero <br> 2017
              </p>
            </div>
            <div class="caption col-xs-8 col-sm-9">
              <h2>Cuidando mis ojos desde los 0 hasta los 150 años</h2>
              <!-- <p>
                La salud visual no se limita a la prescripción de gafas, el
                componente más importante es tener sanos nuestros ojos de cualquier enfermedad visual
              </p> -->
            </div>
            </a>
          </div>
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/articulos/en-que-se-parece-la-diabetes-artritis-hipertencion-y-el-lupus')!!}">
            <img src="img\articulo-en-que-se-parece-la-diabetes-artritis-hipertension-y-el-lupus.jpg" class="img-caption" alt="">
            <div class="col-xs-4 col-sm-3  caption-date" style="background-color:#f8ac2c">
              <p>
                30 <br> Enero <br> 2017
              </p>
            </div>
            <div class="col-xs-8 col-sm-9 caption">
              <h2>En que se parece la Diabetes, Artritis,
                Hipertensión y el Lupus</h2>
                <!-- <p>
                  Si le han diagnosticado Artritis reumatoide, Hipertensión, Diabetes, Hipotiroidismo, migraña o Lupus eritematoso sistémico, debe saber que ...
                </p> -->
              </div>
              </a>
          </div>
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/articulos/ver-mal-no-es-normal')!!}">
              <img src="img\articulo-ver-mal-no-es-normal.jpg" class="img-caption" alt="">
              <div class="col-xs-4 col-sm-3  caption-date"  style="background-color:#d40d81">
                <p>
                  30 <br> Enero <br> 2017
                </p>
              </div>
              <div class="col-xs-8 col-sm-9 caption">
                <h2>Ver mal no es normal</h2>
                <!-- <p>
                  Tampoco que los ojos duelan, rasquen, estén rojos o tengan lesiones. La mayoría de enfermedades visuales son silenciosas y
                  asintomáticas, por estas razones debemos acudir ...
                </p> -->
              </div>
            </a>
          </div>
        </div>
        <div class="row row-note">
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/articulos/hijos-pueden-heredar-problemas-visuales-de-sus-padres')!!}">
              <img src="img\articulo-hijos-pueden-heredar-problemas-visuales-de-sus-padres.jpg" class="img-caption" alt="">
              <div class="col-xs-4 col-sm-3  caption-date" style="background-color:#37b397">
                <p>
                  30 <br> Enero <br> 2017
                </p>
              </div>
              <div class="col-xs-8 col-sm-9 caption">
                <h2>Hijos pueden heredar problemas visuales de sus padres </h2>
                <!-- <p>
                  Si usted tiene problemas visuales como astigmatismo, miopía o hipermetropía debe estar atento a la salud visual de sus hijos,
                  ya que existe ...
                </p> -->
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/articulos/sus-ojos-sanos-en-manos-de-profesionales-expertos')!!}">
              <img src="img\articulo-sus-ojos-sanos-en-manos-de-profesionales-expertos.jpg" class="img-caption" alt="">
              <div class="col-xs-4 col-sm-3  caption-date" style="background-color:#ec641f">
                <p>
                  30 <br> Enero <br> 2017
                </p>
              </div>
              <div class="col-xs-8 col-sm-9 caption">
                <h2>Sus ojos sanos en manos de profesionales expertos</h2>
                <!-- <p>
                  La evaluación y acompañamiento de profesionales expertos puede hacer la diferencia cuando de cuidar sus ojos se trata.
                  Un diagnóstico adecuado ...
                </p> -->
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-md-4 note">
            <a href="{!!URL::to('/articulos/el-chocolate-y-la-vision')!!}">
              <img src="img\articulo-el-chocolate-y-la-vision.jpg" class="img-caption" alt="">
              <div class="col-xs-4 col-sm-3  caption-date" style="background-color:#047297">
                <p>
                  30 <br> Enero <br>  2017
                </p>
              </div>
              <div class="col-xs-8 col-sm-9 caption">
                <h2>El chocolate y la visión</h2>
                <!-- <p>
                  Alimentos que protegen y ayudan a nuestra visión como el chocolate, pueden ayudar a  prevenir enfermedades
                  que conduzcan a la pérdida irreversibles de la ceguera
                </p> -->
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <a href="{!!URL::to('/articulos/cuidando-mis-ojos-desde-los-0-hasta-los-150-anos')!!}" class="btn boton azul-oscuro">Ver más</a>
        </div>
      </div>
  </section>
  <!-- ###################### -->
@endsection
