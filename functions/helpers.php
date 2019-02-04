<?php 

function option_selected($a,$b){

	if( $a == $b ){
		echo "selected";
	}

	return false;
}

//marca la opcion seleccionada en el menu del admin
function menu_selected($slug){

	//slug actual en una variable
    global $post;
    $current_slug=$post->post_name;

	//comparamos los archivos, si son iguales devolvemos la clase active

	if( $current_slug === $slug ){
		return "class='active'";
	}else{
		return "class='no-active'";
	}
}



function ab_excerpt($excerpt,$num) {

	$limit = $num+1;
	
	$excerpt = explode(' ', $excerpt, $limit);
	
	array_pop($excerpt);
	
	$excerpt = implode(" ",$excerpt)." ..."; 
	
	echo $excerpt;

}




?>