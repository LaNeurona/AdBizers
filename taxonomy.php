<?php get_header() ?>

<?php 
if(is_tax('servicio')){
	
	if(is_tax('servicio','soluciones')){

 		get_template_part('templates/soluciones/header-soluciones') ;
 		get_template_part('templates/soluciones/wrapper-soluciones') ;
 		get_template_part('templates/soluciones/final-main-soluciones') ;

	}elseif( is_tax('servicio','consultoria') ){

		get_template_part('templates/consultoria/header-consultoria'); 
		get_template_part('templates/consultoria/wrapper-consultoria'); 
		get_template_part('templates/consultoria/final-main-consultoria'); 

	}elseif( is_tax('servicio','f_company') ){

		 get_template_part('templates/f_company/header-f_company') ;
		 get_template_part('templates/f_company/wrapper-f_company') ;
		 get_template_part('templates/f_company/final-main-f_company') ;


	}elseif( is_tax('servicio','f_open') ){

		 get_template_part('templates/f_open/header-f_open');
		 get_template_part('templates/f_open/wrapper-f_open');
		 get_template_part('templates/f_open/f_open_grid');
		 get_template_part('templates/f_open/final-main-f_open');

	}

}elseif(is_tax('tematica')){


	if(is_tax('tematica','legal_fiscal')){

 		get_template_part('templates/tematica/legal_fiscal/header-legal_fiscal');
 		get_template_part('templates/tematica/legal_fiscal/wrapper-legal_fiscal');
 		get_template_part('templates/tematica/legal_fiscal/final-main-legal_fiscal');
	}elseif( is_tax('tematica','fabricacion_logistica') ){

		get_template_part('templates/tematica/fabricacion_logistica/header-fabricacion_logistica');
 		get_template_part('templates/tematica/fabricacion_logistica/wrapper-fabricacion_logistica');
 		get_template_part('templates/tematica/fabricacion_logistica/final-main-fabricacion_logistica');

	}elseif( is_tax('tematica','finanzas') ){

 		get_template_part('templates/tematica/finanzas/header-finanzas');
 		get_template_part('templates/tematica/finanzas/wrapper-finanzas');
 		get_template_part('templates/tematica/finanzas/final-main-finanzas') ;
	}elseif( is_tax('tematica','marketing') ){
 		get_template_part('templates/tematica/marketing_comunicacion/header-marketing_comunicacion');
 		get_template_part('templates/tematica/marketing_comunicacion/wrapper-marketing_comunicacion');
 		get_template_part('templates/tematica/marketing_comunicacion/final-main-marketing_comunicacion') ;
	}elseif( is_tax('tematica','personas') ){

 		get_template_part('templates/tematica/personas/header-personas');
 		get_template_part('templates/tematica/personas/wrapper-personas');
 		get_template_part('templates/tematica/personas/final-main-personas');

	}elseif( is_tax('tematica','transformacion_digital') ){

 		get_template_part('templates/tematica/transformacion_digital/header-transformacion_digital');
 		get_template_part('templates/tematica/transformacion_digital/wrapper-transformacion_digital');
 		get_template_part('templates/tematica/transformacion_digital/final-main-transformacion_digital') ;
	}elseif( is_tax('tematica','transformacion_estrategica') ){

 		get_template_part('templates/tematica/transformacion_estrategica/header-transformacion_estrategica');
 		get_template_part('templates/tematica/transformacion_estrategica/wrapper-transformacion_estrategica');
 		get_template_part('templates/tematica/transformacion_estrategica/final-main-transformacion_estrategica');

	}elseif( is_tax('tematica','ventas_clientes') ){

 		get_template_part('templates/tematica/ventas_clientes/header-ventas_clientes');
 		get_template_part('templates/tematica/ventas_clientes/wrapper-ventas_clientes');
 		get_template_part('templates/tematica/ventas_clientes/final-main-ventas_clientes');


	}

}


?>
<?php get_footer() ?>