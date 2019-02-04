<?php  

//eliminamos la barra wpadmin navegando en web
add_filter( 'show_admin_bar', '__return_false' );

//activa imagen destacada
add_theme_support('post-thumbnails');
///////////////////////////////////////////////////////




/////////////////////////////////////////////////////

function ab_nav_menus(){
	$locations = array(
			'main-nav-menu' => __('Menú Principal', 'ab' ),
		);

	register_nav_menus ($locations );
}


add_action( 'init', 'ab_nav_menus');


//encolamiento de styles and scripts
//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'adbizers_enqueue_scripts_styles' );



function adbizers_enqueue_scripts_styles(){

	//estilos
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/library/bootstrap/css/bootstrap.min.css', array() );
	


	
	wp_enqueue_style( 'main_style', get_stylesheet_directory_uri().'/style.css', array() );

		//custom styles
	wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri().'/css/custom-style.css', array() );
	wp_enqueue_style( 'contact_style', get_stylesheet_directory_uri().'/css/contact-style.css', array() );
	wp_enqueue_style( 'navbar_style', get_stylesheet_directory_uri().'/css/navbar-style.css', array() );
	wp_enqueue_style( 'search-form_style', get_stylesheet_directory_uri().'/css/search-form-style.css', array() );	
	wp_enqueue_style( 'carousel_style', get_stylesheet_directory_uri().'/css/carousel-style.css', array() );
	wp_enqueue_style( 'taller_style', get_stylesheet_directory_uri().'/css/taller-style.css', array() );

	//JQUERY------------------
	//NO ESTA EN EL PANEL DE ADMINISTRACION (BACKOFFICE)
	if( !is_admin() ){
		//funcion para eliminar un scripts hay que darle el alias $hangle
		//eliminamos el jquery que viene por defecto
		wp_deregister_script( 'jquery' );
		//le decimos que incluya el script
		wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',array(),'3.2.1',true);
	}

	//footer scripts
	wp_enqueue_script('aviso_cookies', get_bloginfo('stylesheet_directory') . '/js/aviso-cookies.js' ,array('jquery'),false,true );
	wp_enqueue_script('bootstrap_js', get_bloginfo('stylesheet_directory') . '/library/bootstrap/js/bootstrap.min.js' ,array('jquery'),false,true );	


}//fin adbizers_enqueue_scripts_styles()

//acf filters

//integra la google maps api para el 

function ab_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBrcwyehTWcP5l13p2s6pxzHkQwMqyL7xA');
}


//add_action('acf/init', 'ab_acf_init');

function ab_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBrcwyehTWcP5l13p2s6pxzHkQwMqyL7xA';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'ab_acf_google_map_api');




//añade las sedes a su campo ACF
function acf_load_ab_sedes_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
       
    //recojemos todos los cpt sedes	
    	$args = array(
			'post_type' => 'sede', //sede post_type
			'posts_per_page' => -1, //devuelve todos los post

		);

		$query = new WP_Query( $args );
		//devuelve objeto multidimensional
		// contenido de los cpts en $query->posts (array lleno de objetos)	

/*		echo "<pre>";
		var_dump($query->posts[0]);
		echo "</pre>";*/	

    foreach ($query->posts as $sede) {
    	
    	$field['choices'][ $sede->ID ] = $sede->post_title;

    }

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=sede', 'acf_load_ab_sedes_field_choices');


//añade los ponentes a su campo ACF cpt convocatoria
function acf_load_ab_ponentes_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
       
    //recojemos todos los cpt sedes	
    	$args = array(
			'post_type' => 'ponente', //sede post_type
			'posts_per_page' => -1, //devuelve todos los post

		);

		$query = new WP_Query( $args );
		//devuelve objeto multidimensional
		// contenido de los cpts en $query->posts (array lleno de objetos)	

/*		echo "<pre>";
		var_dump($query->posts[0]);
		echo "</pre>";*/	

    foreach ($query->posts as $ponente) {
    	
    	$field['choices'][ $ponente->ID ] = $ponente->post_title;

    }

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=ponente_curso', 'acf_load_ab_ponentes_field_choices');

add_filter('acf/load_field/name=ponente_curso_2', 'acf_load_ab_ponentes_field_choices');


//añade los curso a su campo ACF cpt convocatoria
function acf_load_ab_cursos_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
       
    //recojemos todos los cpt sedes	
    	$args = array(
			'post_type' => 'curso', //sede post_type
			'posts_per_page' => -1, //devuelve todos los post

		);

		$query = new WP_Query( $args );
		//devuelve objeto multidimensional
		// contenido de los cpts en $query->posts (array lleno de objetos)	

/*		echo "<pre>";
		var_dump($query->posts[0]);
		echo "</pre>";*/	

    foreach ($query->posts as $ponente) {
    	
    	$field['choices'][ $ponente->ID ] = $ponente->post_title;

    }

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=curso_convocatoria', 'acf_load_ab_cursos_field_choices');

//includes

include_once('functions/helpers.php');

include_once('functions/login_style_functions.php')
?>