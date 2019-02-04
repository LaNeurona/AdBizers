<?php 

				//recojemos valor de id curso y tremos sus datos
				$id_curso = get_field('curso_convocatoria');
				$curso = get_post($id_curso);
				$curso_cf = get_post_custom($id_curso);


				//var_dump($curso_cf);

				$img_id = $curso_cf['imagen_cabecera'][0];

				$img_id = (int)$img_id;

				//var_dump($img_id);
				//imagen cabecea curso
				// url = $img->guid
				$img = get_post( $img_id );

		
				//recojemos valor id ponente y tremos sus datos
				$id_ponente = get_field('ponente_curso');
				//var_dump($id_ponente);
				$ponente = get_post($id_ponente);
				$ponente_cf = get_post_custom($id_ponente);
				//var_dump($ponente_cf);
				
				//recojemos id sede y tremos sus datos
				$id_sede = get_field('sede');
				$sede = get_post($id_sede);
				$sede_cf = get_post_custom($id_sede);
				//var_dump($sede);
				//var_dump($sede_cf);



?>

	<div class="container-fluid" style="margin-top: 70px; min-height: 550px;background-image: url(' <?php echo $img->guid ?> ');background-size: cover; background-position: top center">
		<div class="container taller-header-container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-8">
					<h1><strong><?php echo $curso->post_title ?></strong></h1>
					<h4>Objetivo:</h4>
					<h4><strong><?php echo $curso_cf['objetivo'][0]  ?></strong></h4>
					<h4>Formadora:</h4>
					<h4><strong><?php echo $ponente->post_title ?></strong> <?php echo $ponente_cf['cargo_1'][0].' - '.$ponente_cf['empresa_1'][0] ?></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="row">
						<div class="col-xs-3" style="padding-left: 0px !important;white-space: nowrap;">
							<span class="fas fa-map-marker-alt header-icon"></span>
							<span><?php echo $sede_cf['ciudad_sede'][0] ?></span>
							<div class="col-sm-12 hidden-xs">	
								<p style="font-size: .8em;margin-bottom: 0px"><?php echo $sede->post_title ?></p>
								<p style="font-size: .8em;margin-top: 0px"><?php echo $sede_cf['direccion_sede'][0] ?></p>
							</div>
						</div>
						<div class="col-xs-5">
							<span class="far fa-calendar-alt header-icon"></span>
							<span><strong><?php the_field('fecha') ?></span>
						</div>
						<div class="col-xs-4 text-center">
							<a href="https://interbanservices.com/formularios/form_adbizers/<?php the_field('id_crm_curso') ?>" class="track out_track">INSCRIPCIÓN</a>
							<!-- <button>INSCRIPCIÓN</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /.container-fluid -->