			<?php 

				//recojemos valor de id curso y tremos sus datos
				$id_curso = get_field('curso_convocatoria');
				$curso = get_post($id_curso);
				$curso_cf = get_post_custom($id_curso);
				$curso_img = get_the_post_thumbnail_url($id_curso);

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
			<div class="col-xs-12 col-sm-6 col-md-3 destacado-item" style="">

				<div style="height: 30px; width: 100%;    max-width: 305px;    margin: 0px auto .2em;">
					<p style="font-size: .8em;color: #666666">Colaborador: </p>
					<?php if( $id_sede == 29 ): ?>
						<img src="<?php bloginfo('template_url') ?>/img/logos/nett-formacion.jpg" alt="" style="float: right; width: 70px;margin-top: -1.5em">
					<?php else: ?>
						<img src="<?php bloginfo('template_url') ?>/img/logos/ibercaja-horizontal.jpg" alt="" style="float: right; width: 70px;margin-top: -1.5em">
					<?php endif; ?>	
				</div>

				<a href="<?php echo the_permalink() ?>">

					<div class="destacado-item-item" style="max-width: 305px; margin: 0px auto; position: relative;">
						
						<img src="<?php echo $curso_img ?>" class="img-responsive" alt="" >
						
						<div><span class="tematica-label"><?php echo $curso_cf['etiqueta'][0] ?></span></div>
						
						<div style="" class="producto-label"><span>Formación Open</span></div>
						
						<div style="position: relative;">
							<img src="<?php echo $ponente_img ?>" alt="" class="ponente-box-img-1">					
						</div>
				
						
						<div class="col-xs-12 box-info">
							
							<h3 class="purpura"><?php echo $curso->post_title ?></h3>

							<?php if( strlen($curso->post_title) > 47 ):  ?>
								<p class="subtitulo-box"><?php ab_excerpt($curso_cf['objetivo'][0],10)  ?></p>
							<?php else: ?>
								<p class="subtitulo-box"><?php ab_excerpt($curso_cf['objetivo'][0],22)  ?></p>
							<?php endif; ?>	
							
							
							
							<p style="font-size: .8em;color: #666666;">Impartido por <strong><?php echo $ponente->post_title ?></strong></p>
							
							<div class="box-date">
								<span class="fas fa-map-marker-alt" style="margin-left: 0px !important;color: #999999"></span><span class="purpura"><?php echo $sede_cf['ciudad_sede'][0] ?></span> <span style="color: #666666">| <?php the_field('fecha') ?></span>
								<span></span>
							</div>
						
							<div class="row" style="margin-top: .8em">
								<div class="col-xs-6 box-price">
									<h3 class="purpura" style="margin-bottom: 0px; padding-bottom: 0px"><?php echo  round($curso_cf['precio'][0], 2);?>,00€</h3>
									<p style="font-size: .9em; margin-right: .2em;margin-top: -3px;" class=" purpura">+ IVA</p>
								</div>
								<div class="col-xs-6 box-valoration" style="color: #999999;padding-left: 0px;padding-right: 0px">
					<!-- 				<span class="far fa-thumbs-up " style="font-size: 1.5em !important;"></span><span><h3>98,4%</h3>(234)</span> -->
								</div>
							</div>
						
						</div>
					</div>
					
				</a>

				<div style="clear: both;"></div>
			</div> <!-- /.destacado-item -->
			

		<!-- fin box-curso -->