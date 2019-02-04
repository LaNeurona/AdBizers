<?php 
				//recojemos valor de id curso y tremos sus datos
				$id_curso = get_field('curso_convocatoria');
				$curso = get_post($id_curso);
				$curso_cf = get_post_custom($id_curso);


				
?>
<?php $tematica = wp_get_post_terms($post->ID, 'tematica', array("fields" => "names")); ?>
<div class="container-fluid tips-taller-container" style="background-color: #94668f; border-top: 1px #ffffff solid">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<div class="col-xs-4 col-sm-4 tips-icon">
					<img src="<?php echo bloginfo('template_url') ?>/img/icons/taller-tips-1.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-8 col-sm-8 tip-description">
					<h3>Modalidad</h3>
					<p>Curso presencial</p>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="col-xs-4 col-sm-4 tips-icon">
					<img src="<?php echo bloginfo('template_url') ?>/img/icons/taller-tips-2.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-8 col-sm-8 tip-description">
					<h3>Categoría</h3>
					<p> &nbsp; &nbsp; <?php echo $tematica[0] ?></p>
				</div>
			</div>									
			<div class="col-xs-6 col-sm-3">
				<div class="col-xs-4 col-sm-4 tips-icon">
					<img src="<?php echo bloginfo('template_url') ?>/img/icons/taller-tips-3.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-8 col-sm-8 tip-description">
					<h3>Duración</h3>
					<p>&nbsp;<?php echo $curso_cf['duracion'][0] ?> horas</p>
				</div>
			</div>
<!-- 			<div class="col-xs-6 col-sm-3">
			<div class="col-xs-4 col-sm-4 tips-icon">
				<img src="<?php echo bloginfo('template_url') ?>/img/icons/taller-tips-4.png" alt="" class="img-responsive">
			</div>
			<div class="col-xs-8 col-sm-8 tip-description">
				<h3>97%</h3>
				<p>Valoraciones Positivas</p>
			</div>
		</div>	 -->		
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.container-fluid -->