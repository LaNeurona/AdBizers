<!DOCTYPE html>
<html lang="<?php bloginfo('languaje') ?>">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
<!--     <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            
            my style
            <link href="css/style.css" rel="stylesheet">  
            
            <link href="css/navbar-style.css" rel="stylesheet">  
            
            <link href="css/carousel-style.css" rel="stylesheet">    
            
            <link href="css/taller-style.css" rel="stylesheet">     
            
            <link href="css/contact-style.css" rel="stylesheet">   -->            

    <!-- fontawesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">



    <!-- defino imagen al compartir en facebook -->
    <!-- <link href="https://adbizers.com/img/chema_martinez/chema_martinez_caja.jpg" rel="image_src"/> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132415521-1"></script> -->
    
    <!-- <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-132415521-1');
    </script> -->

  <?php wp_head(); ?> 
  </head>
  <body <?php body_class(); ?>>


<!-- menu -->
<?php //include('templates/general/navbar-menu.php'); ?>

<?php get_template_part('templates/general/navbar-menu') ?>