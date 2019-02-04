<?php 

		//recojemos valor de id curso y tremos sus datos
		$id_curso = get_field('curso_convocatoria');
		$curso = get_post($id_curso);
		$curso_cf = get_post_custom($id_curso);

		$img_id = $curso_cf['imagen_cabecera'][0];
		$img_id = (int)$img_id;
		// url = $img->guid
		$img = get_post( $img_id );

		//recojemos valor id ponente y tremos sus datos
		$id_ponente = get_field('ponente_curso');
		//var_dump($id_ponente);
		$ponente = get_post($id_ponente);
		$ponente_cf = get_post_custom($id_ponente);
		$ponente_img = get_the_post_thumbnail_url($id_ponente );

		//iniciamos variable
		$ponente_2 = false;

		if(get_field('ponente_curso_2')){
			//recojemos valor id ponente y tremos sus datos
			$id_ponente_2 = get_field('ponente_curso');
			$ponente_2 = get_post($id_ponente_2);
			$ponente_cf_2 = get_post_custom($id_ponente_2);
			$ponente_img_2 = get_the_post_thumbnail_url($id_ponente_2 );

		}
				
		//recojemos id sede y tremos sus datos
		$id_sede = get_field('sede');
		$sede = get_post($id_sede);
		$sede_cf = get_post_custom($id_sede);


		//comprabomos las convocatorias existententes con el mismo curso
		//recojemos el valor del campo curso_convocatoria
		$value_curso = get_field('curso_convocatoria');
		$args = array(
			'post_type' => 'convocatoria', // post_type
			'posts_per_page' => -1, //numero de post
			'meta_query' => array(
								array(//valor del custom field del que buscamos coincidencia
									'value'   => $value_curso,
								),
							),
				);
		//posterior loop
		$prox_conv = new WP_Query( $args );

			
?>
<div class="row patro-aside">
	<div class="col-xs-12">
		<p style="padding-left: 0em"> <strong>Colaborador: </strong></p>
		
		<?php if( $id_sede == 29 ): ?>

			<img src="<?php echo bloginfo('template_url') ?>/img/logos/nett-formacion.jpg" alt="" class="img-responsive">
		
		<?php else: ?>

			<img src="<?php echo bloginfo('template_url') ?>/img/logos/ibercaja-crm.png" alt="" class="img-responsive">

		<?php endif; ?>	

	</div>
</div>
<div class="row bg-aside">
	
	<div class="col-xs-12 formador-aside text-center">
		<h4 class="purpura border-aside" style="text-align: left !important; ">Un <?php echo $curso_cf['denominacion'][0] ?> de</h4>
		
		<img src="<?php echo $ponente_img; ?>" alt="" style="margin-top: .7em">
		<h3 class="text-center purpura"><?php echo $ponente->post_title; ?></h3>
		<h5 class="text-center"><?php echo $ponente_cf['cargo_1'][0].' - '.$ponente_cf['empresa_1'][0] ?></h5>
		<div class="rrss-formador">
			<a href="<?php echo $ponente_cf['twitter_ponenete'][0] ?>"><span class="fab fa-twitter fa-2x purpura"></span></a>
			<a href="<?php echo $ponente_cf['facebook_ponente'][0] ?>"><span class="fab fa-facebook-f fa-2x purpura"></span></a>
			<a href="<?php echo $ponente_cf['lindein_ponente'][0] ?>"><span class="fab fa-linkedin-in fa-2x purpura"></span></a>
		
		</div>

	</div> <!-- /.formador-aside -->


<!-- segundo ponente -->
<?php if($ponente_2): ?>

	<div class="col-xs-12 formador-aside text-center" style="border-top: 1px solid #ccc">

		<img src="<<?php echo $ponente_img; ?>" alt="" style="margin-top: .7em">
		<h3 class="text-center purpura"><?php echo $ponente_2->post_title; ?></h3>
		<h5 class="text-center"><?php echo $ponente_cf_2['cargo_1'][0].' - '.$ponente_cf_2['empresa_1'][0] ?></h5>
		<div class="rrss-formador">
			<a href="<?php echo $ponente_cf_2['twitter_ponenete'][0] ?>"><span class="fab fa-twitter fa-2x purpura"></span></a>
			<a href="<?php echo $ponente_cf_2['facebook_ponente'][0] ?>"><span class="fab fa-facebook-f fa-2x purpura"></span></a>
			<a href="<?php echo $ponente_cf_2['lindein_ponente'][0] ?>"><span class="fab fa-linkedin-in fa-2x purpura"></span></a>
		</div>

	</div> <!-- /.formador-aside -->	

<?php endif; ?>
<!-- fin segundo ponente -->

	<div class="col-xs-12 detalles-aside">
		<h4 class="purpura border-aside">Detalles del <?php echo $curso_cf['denominacion'][0] ?></h4>		
		<div>
			<h5 class="purpura">Duración: <strong><?php echo $curso_cf['duracion'][0] ?> Horas</strong></h5>
			<h5 class="purpura">Precio del <?php echo $curso_cf['denominacion'][0] ?>: <strong><?php echo $curso_cf['precio'][0] ?> €</strong><span style="color: #000000;font-size: 12px"> +IVA</span></h5>
			<h5 class="purpura">Incluye:</h5>
			<h5 class="purpura"><strong style="padding-left: .5em">·  Coffee Break de 15 minutos</strong></h5>
			<h5 class="purpura"><strong style="padding-left: .5em">·  Material didáctico</strong></h5>
			<h5 class="purpura"><strong style="padding-left: .5em">·  Diploma Acreditativo AdBizers</strong></h5>
		</div>
	</div> <!-- /.detalles-aside -->

	<div class="col-xs-12 convocatoria-aside">
		<h4 class="purpura border-aside">Fecha y Sede</h4>
		<div class="row">
			<div class="col-xs-2"><span class="purpura fas fa-map-marker-alt fa-2x"></span></div>
			<div class="col-xs-9 aside-data"><p><?php echo $sede_cf['ciudad_sede'][0] ?></p></div>
		</div>
		<div class="row">
			<div class="col-xs-2"><span class="purpura far fa-clock fa-2x"></span></div>
			<div class="col-xs-9 aside-data"><p><?php the_field('horario') ?></p></div>
		</div>		
		<div class="row">
			<div class="col-xs-2"><span class="purpura far fa-calendar-alt fa-2x"></span></div>
			<div class="col-xs-9 aside-data">
				<p><?php the_field('fecha') ?></p>
				<p><?php echo $sede->post_title ?></p>
				<p><?php echo $sede_cf['direccion_sede'][0] ?></p>
			</div>
		</div>		
		<div class="row">
			<div class="col-xs-12 aside-button">
				<a href="https://interbanservices.com/formularios/form_adbizers/<?php the_field('id_crm_curso') ?>" class="track out_track">INSCRIPCIÓN</a>				
			</div>
		</div>	

	
		<!-- proximas convocatorias del mismo curso/taller -->
		<?php//id convocatoria current // antes del bucle ?>
		<?php $id_post = get_the_ID(); ?>			 
		<?php if ( $prox_conv->have_posts() ) : while ( $prox_conv->have_posts() ) : $prox_conv->the_post(); ?>
			<?php //recojemos id de la convocatoria ?>
			<?php $id_prox_conv = get_the_ID(); ?>
			<?php //evaluamos que no es la misma que la que estamos mostrando ?>
			<?php if( $id_post != $id_prox_conv ): ?>

				<?php 
					//recojemos info de la sede de la convocatoria del mismo curso					
					$id_sede_prox = get_field('sede');
					//$sede_prox = get_post($id_sede_prox);
					$sede_cf_prox = get_post_custom($id_sede_prox);
			
				?>

			<div class="row" style="margin-top: 1em;padding-top: 1em; border-top: 1px dashed #cccccc;">
				<div class="col-xs-2"><span class="purpura fas fa-map-marker-alt fa-2x"></span></div>
				<div class="col-xs-9 aside-data"><p><?php echo $sede_cf_prox['ciudad_sede'][0] ?></p></div>
			</div>
		
			<div class="row" style="border-bottom: 1px #cccccc dashed;margin-bottom: 1em; padding-bottom: 1em;">
				<div class="col-xs-2"><span class="purpura far fa-calendar-alt fa-2x"></span></div>
				<div class="col-xs-9 aside-data">
					<p><?php the_field('fecha') ?></p>
					<a href=" <?php the_permalink() ?> ">+ INFO</a>
				</div>
			</div>

			
		
			<?php endif; ?>		

		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>	
	
		<!-- fin proximas convocatorias del mismo curso/taller -->		



		<div class="row pdf-aside">
			<div class="col-xs-12 text-center"><a href="<?php the_field('pdf_curso') ?>"><span class="purpura far fa-file-pdf"></span><span>Descargar temario PDF</span></a></div>
		</div>

	</div> <!-- /.convocatoria-aside -->

	<div class="col-xs-12 info-aside">
		<h3 class="text-center" style="color: #111">¿Tienes alguna duda?</h3>
		<p class="text-center">Llámanos al:</p>
		<h3 class="text-center" style="margin-top: 10px;white-space: nowrap;"><span class="fas fa-phone purpura"></span><span style="color:#111111;font-size: 1.2em; white-space: nowrap; ">91 763 87 11</span></h3>
	</div> <!-- /.info-aside -->		

	<!-- rrss template -->
	<?php get_template_part('templates/curso/rrss-aside') ?>

</div> <!-- /.row -->