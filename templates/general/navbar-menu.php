        <!-- Fixed navbar -->
    <nav class="custom-navbar navbar navbar-default navbar-fixed-top" style="background-color: #5189c2">
      <div class="container" style="padding: 0px !important">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-right: 3em;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/img/logo-menu.png" alt="" class="logo-menu" style="margin-left: 3em;"></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-th-large"></i>  Servicios <!-- <span class="caret"></span> --></a>
              <ul class="dropdown-menu" style="">
                <li><a href="<?php echo bloginfo('url') ?>/servicio/consultoria">Consultoría y Asesoría</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/servicio/f_open">Formación Open</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/servicio/f_company">Formación In Company</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/servicio/soluciones">Soluciones y Servicios Digitales</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-th-large"></i>  Áreas <!-- <span class="caret"></span> --></a>
              <ul class="dropdown-menu" style="">
                <li><a href="<?php echo bloginfo('url') ?>/tematica/finanzas">Finanzas</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/legal_fiscal">Compliance, Legal Y Fiscal</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/personas">Personas</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/transformacion_digital">Transformación Digital</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/marketing">Marketing y Comunicación</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/fabricacion_logistica">Fabricación y Logística</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/ventas_clientes">Ventas y Clientes</a></li>
                <li><a href="<?php echo bloginfo('url') ?>/tematica/transformacion_estrategica">Transformación Estratégica y Management</a></li>
              </ul>
            </li>
              
            <li <?= menu_selected('quienes-somos') ?>><a href="<?php echo bloginfo('wpurl') ?>/quienes-somos/">Quiénes Somos</a></li>
            <li <?= menu_selected( 'contacto') ?>><a href="<?php echo bloginfo('wpurl') ?>/contacto/">Contacto</a></li>
        

          </ul>
          <ul class="nav navbar-nav navbar-right">


          <!-- searchform -->
            <div id="navbar" class="navbar-collapse collapse">
             <!--  <form class="navbar-form navbar-right">
               <div class="form-group">
                 <input type="search" placeholder="search" class="form-control">
               </div>
               <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
             </form> -->
            </div><!--/.navbar-collapse -->
          <!-- fin searchform -->

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>