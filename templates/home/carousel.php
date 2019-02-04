
  <style>
    .carousel-caption{
      bottom: 50px !important;
    }
  </style>

   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">

        <div data-duration="6000" class="item active">
          <img class="first-slide img-responsive" src="<?php bloginfo('template_url') ?>/img/slider_home_1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
             <h1>Somos la primera comunidad de agentes del cambio</h1>
             <p>Somos una comunidad de profesionales que tiene como misión ayudar a las empresas en sus procesos de cambio y transformación mediante la primera plataforma digital que aúna formación, consultoría y soluciones para profesionales como tú</p>
             <p><a class="btn btn-lg btn-primary" href="quienes_somos.php" role="button">Más Información</a></p>
            </div>
          </div>
        </div>
        

        <div data-duration="6000" class="item">
          <img class="second-slide" src="<?php bloginfo('template_url') ?>/img/slider_home_2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Formación in Company</h1>
              <p>Te ofrecemos las soluciones formativas in-house para cuadros directivos, Mentoring estratégico para CEOs y Directivos. Accede ya a una formación exclusiva de la mano de los mejores expertos.</p>
              <p><a class="btn btn-lg btn-primary" href="f_company.php" role="button">Más Información</a></p>
            </div>
          </div>
        </div>
        

        <div data-duration="6000" class="item">
          <img class="third-slide" src="<?php bloginfo('template_url') ?>/img/slider_home_3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Servicios de Consultoría y Asesoría</h1>
              <p>Ponemos a tu disposición la mayor red de Consultores y Asesores Asociados para que encuentres la solución de negocio y des respuesta a tus necesidades desde la experiencia, la innovación y el conocimiento.</p>
              <p><a class="btn btn-lg btn-primary" href="consultoria.php" role="button">Más Información</a></p>
            </div>
          </div>
        </div>
      

      </div> <!-- /.carousel-inner -->

      <!-- arrows -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div><!-- /.carousel -->