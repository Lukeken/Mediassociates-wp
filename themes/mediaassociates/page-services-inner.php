<?php 
	/*
		Template Name: Services Inner
	*/
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="wrapper">
<?php get_template_part('header','inner'); ?>
</div>
<div class="page">
	<div class="wrapper">
		<section id="main">
			<section id="content">
				<?php the_content(); ?>
				<?php if(get_field('content_filter')) remove_filter ('the_content',  'wpautop'); ?>	
				<?php if(get_field('service_mod_title') != "Enter your title") { ?>
					<div class="info-block">
						<?php if(get_field('service_mod_title')) {
							echo "<h2>";
							the_field('service_mod_title');
							echo "</h2>";
						} if (get_field('service_module_content')) {
							the_field('service_module_content');
						} ?>
					</div><!--info-block-->
				<?php } ?>
			</section><!-- / content -->
			<?php get_sidebar(); ?>
		</section><!-- / main -->
	</div><!-- / wrapper -->
</div><!-- / page -->
<?php endwhile; ?>
<?php get_footer(); ?>