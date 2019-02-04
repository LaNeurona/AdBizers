<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ;?>
<?php 

		//return the post id inside main loop
		$convoctoria_id = get_the_ID();;




	switch ($convoctoria_id) {
		

		case 92:
				get_template_part('templates/taller/chema_martinez_madrid/header-taller');
				get_template_part('templates/taller/chema_martinez_madrid/tips-taller-row');
				get_template_part('templates/taller/chema_martinez_madrid/wrapper-taller');
			break;
		
		case 93:
				get_template_part('templates/taller/chema_martinez_zaragoza/header-taller');
				get_template_part('templates/taller/chema_martinez_zaragoza/tips-taller-row');
				get_template_part('templates/taller/chema_martinez_zaragoza/wrapper-taller');
			break;			

		case  94:
				get_template_part('templates/taller/ana_sierra_madrid/header-taller'); 
	 			get_template_part('templates/taller/ana_sierra_madrid/tips-taller-row'); 
	 			get_template_part('templates/taller/ana_sierra_madrid/wrapper-taller'); 
			break;			

		case 81:
				get_template_part('templates/taller/jose_maria_casero_madrid/header-taller'); 
	 			get_template_part('templates/taller/jose_maria_casero_madrid/tips-taller-row'); 
	 			get_template_part('templates/taller/jose_maria_casero_madrid/wrapper-taller'); 
			break;

		case 90:
				get_template_part('templates/taller/jose_maria_casero_zaragoza/header-taller'); 
	 			get_template_part('templates/taller/jose_maria_casero_zaragoza/tips-taller-row'); 
	 			get_template_part('templates/taller/jose_maria_casero_zaragoza/wrapper-taller'); 
			break;	

		case 96:
				get_template_part('templates/taller/gdpr/header-taller'); 
	 			get_template_part('templates/taller/gdpr/tips-taller-row'); 
	 			get_template_part('templates/taller/gdpr/wrapper-taller'); 
			break;	

		case 91:
				get_template_part('templates/taller/ahinoa_gomez_beltran_madrid/header-taller'); 
	 			get_template_part('templates/taller/ahinoa_gomez_beltran_madrid/tips-taller-row'); 
	 			get_template_part('templates/taller/ahinoa_gomez_beltran_madrid/wrapper-taller'); 
			break;									

		
		default:

				get_template_part('templates/curso/header-taller'); 
	 			get_template_part('templates/curso/tips-taller-row'); 
	 			get_template_part('templates/curso/wrapper-taller'); 

			break;
	}



?>	






<?php endwhile; endif; ?>	
<?php get_footer() ?>