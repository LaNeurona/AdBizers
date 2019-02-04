<?php 

//recogemos las convocatorias
    	$args = array(
			'post_type' => 'convocatoria', //sede post_type
			'posts_per_page' => -1, //devuelve todos los post
			'orderby'   => 'meta_value',
			'meta_key'  => 'fecha',
			'order' => 'ASC'
		);

		$query = new WP_Query( $args );



?>

<div class="container-fluid">
	<div class="container" style="margin-top: 3em; margin-bottom: 3em;">
	
		<div class="row">
			<div class="col-xs-6">
				<h3 style="margin-bottom: 1.2em">Formación Open</h3>
			</div>
		</div>
		<div class="row">
		<?php if ( $query->have_posts() ) : while ($query-> have_posts() ) : $query->the_post() ;?>	
			<?php global $post; $post_id = $post->ID; ?>
			<?php 

			switch ($post_id) {

				case 81:
					get_template_part('templates/home/curso_box/curso_box_jose_maria_casero_madrid');
					break;
				
				case 92:
					get_template_part('templates/home/curso_box/curso_box_chema_martinez_madrid');
					break;

				case 96:
					get_template_part('templates/home/curso_box/curso_box_gdpr');
					break;

				case 94:
					get_template_part('templates/home/curso_box/curso_box_ana_sierra_madrid');
					break;	


				case 90:
					get_template_part('templates/home/curso_box/curso_box_jose_maria_casero_zaragoza');
					break;	

				case 91:
					get_template_part('templates/home/curso_box/curso_box_ahinoa_gomez_madrid');
					break;	


				case 93:
					get_template_part('templates/home/curso_box/curso_box_chema_martinez_zaragoza');
					break;	


				default:
					get_template_part('templates/curso_box/curso_box');
					break;
			}

			?>

		<!-- fin cajas cursos -->
		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>	
		</div>
	</div>
</div>