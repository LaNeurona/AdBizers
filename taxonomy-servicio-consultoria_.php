<?php get_header() ?>

<?php 
if(is_tax('servicio')){
	echo "servicio";
}elseif(is_tax('tematica')){
	echo "tematica";
}


?>

<?php get_template_part('templates/consultoria/header-consultoria') ?>

<?php get_template_part('templates/consultoria/wrapper-consultoria') ?>


<?php get_template_part('templates/consultoria/final-main-consultoria') ?>





<?php get_footer() ?>