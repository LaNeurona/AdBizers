<?php 

	//recojemos valor de id curso y tremos sus datos
	$id_curso = get_field('curso_convocatoria');
	$curso = get_post($id_curso);
	$curso_cf = get_post_custom($id_curso);

	//var_dump($curso);
	//var_dump($curso_cf);

	$img_id = $curso_cf['imagen_cabecera'][0];

	$img_id = (int)$img_id;
	// url = $img->guid
	$img = get_post($img_id);

	//recojemos valor id ponente y tremos sus datos
	$id_ponente = get_field('ponente_curso');
	//var_dump($id_ponente);
	$ponente = get_post($id_ponente);
	$ponente_cf = get_post_custom($id_ponente);
	$ponente_img = get_the_post_thumbnail_url($id_ponente );

				
	//recojemos id sede y tremos sus datos
	$id_sede = get_field('sede');
	$sede = get_post($id_sede);
	$sede_cf = get_post_custom($id_sede);

?>
<div class="row">

	<div class="col-xs-12 taller-title">
		<h1 class="purpura"><?php echo $curso->post_title ?></h1>
	</div> <!-- /.taller-title -->

	<div class="col-xs-12 taller-listado taller-descripcion">
		<?php echo $curso->post_content ?>
	</div>


	<div class="col-xs-12 col-sm-6 taller-pdf">
		<a href="<?php the_field('pdf_curso') ?>"><span class="far fa-file-pdf"></span><span>Descargar temario PDF</span></a>
	</div> <!-- /.taller-pdf -->
	
	<div class="col-xs-12 audiencia">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<span class="fas fa-users fa-9x"></span>
			</div>
			<div class="col-xs-12 col-sm-8 purpura">
				<?php echo $curso_cf['audiencia'][0] ?>
			</div>
		</div>
	</div> <!-- /.audiencia -->
	
	<div class="col-xs-12 taller-formador">
		
		<h1 class="purpura"><?php echo $ponente->post_title; ?></h1>
		
		<h3><?php echo $ponente_cf['cargo_1'][0]?> <?php echo (isset($ponente_cf['empresa_1'][0])) ? ' - '.$ponente_cf['empresa_1'][0] : '' ?></h3>
		<h3><?php echo $ponente_cf['cargo_2'][0] ?><?php echo (isset($ponente_cf['empresa_2'][0])) ? ' - '.$ponente_cf['empresa_2'][0] : '' ?></h3>
		
		<div class="col-xs-12">
			<?php echo $ponente->post_content; ?>
		</div>
	
	</div> <!-- /.formador -->
	
	<!-- <div class="col-xs-12 taller-contenido-relacionado">
		<h1 class="purpura">Contenido Relacionado</h1>
		<h3>La felicidad reside en nuestro cerebro</h3>
		<p>Ana Sierra. Psicóloga, Escritora y Conferenciante</p>
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe src="https://www.youtube.com/embed/JFaNs8B91ag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
		</div>
		
	</div> /.contenido-relacionado
	 -->
</div> <!-- /.row -->