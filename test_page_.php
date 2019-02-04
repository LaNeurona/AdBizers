<?php 
/**
 * Template Name: Test Page
 *
 */
?>


<?php get_header() ?>

<?php 	
$post_id = 11;// example post id

$post_content = get_post($post_id);

echo "<pre>";
var_dump($post_content);
echo "</pre>";

$content = $post_content->post_content;

 ?>
<?php 	

		$args = array(
			'post_type' => 'sede', //sede post_type
			'posts_per_page' => -1, //devuelve todos los post

		);

		$query = new WP_Query( $args );
		//devuelve objeto multidimensional
		// contenido de los cpts en $query->posts (array lleno de objetos)	
		echo "<pre>";
		var_dump($query->posts[0]);
		echo "</pre>";	


?>


<?php get_footer() ?>