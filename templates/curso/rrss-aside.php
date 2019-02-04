	<div class="col-xs-12 rrss-aside">
		<h4 class="purpura border-aside">Comparte este curso</h4>
		<div class="row">
					<div class="col-xs-4 text-center">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
							<img src="<?php echo bloginfo('template_url') ?>/img/icons/icono_social_facebook.png" alt="" class="img-responsive">
						</a>
					</div>
					
					<div class="col-xs-4 text-center">
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo (get_the_excerpt() ? urlencode(get_the_excerpt()) : ''); ?>&source=LinkedIn">
							<img src="<?php echo bloginfo('template_url') ?>/img/icons/icono_social_linkedin.png" alt="" class="img-responsive">
						</a>
					</div>
					
					<div class="col-xs-4 text-center">
						<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo urlencode( the_title() ); ?>" target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=600,height=500,toolbar=1,resizable=0'); return false;">
							<img src="<?php echo bloginfo('template_url') ?>/img/icons/icono_social_twitter.png" alt="" class="img-responsive">
						</a>
					</div>
				</div>		
	</div> <!-- /.rrss-aside -->	