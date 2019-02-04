<?php //include('config.php'); ?>
<?php //include ABSPATH . 'functions/helpers.php'; ?>
<?php //include ABSPATH . 'functions/custom_scripts.php'; ?>

<?php //include('header.php') ?>

<?php get_header() ?>


<h1 style="margin-top: 150px">PAGE</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<?php the_content() ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php //include('footer.php') ?>
<?php get_footer() ?>