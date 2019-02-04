<?php 


//cambiar el logo de la página de login de WordPress
function ab_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
        	padding: 0em .1em !important;
            width: auto !important;
            background-image: url("<?php echo get_stylesheet_directory_uri();?>/img/login/AdBazers-negativo-crm.png") !important;
            background-size: 98% !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'ab_login_logo' );


//cambiar el enlace del logo de la página de login de WordPress 
function ab_login_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'ab_login_logo_url' );
 
//cambiar el titulo del enlace
function ab_login_logo_url_title() {
    return 'AdBizers';
}

add_filter( 'login_headertitle', 'ab_login_logo_url_title' );


//encolar nuevas hojas de estilo y archivos js
function ab_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/style-login.css' );
    //wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/js/style-login.js' );
}

add_action( 'login_enqueue_scripts', 'ab_login_stylesheet' );

?>