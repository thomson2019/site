<?php get_header(); ?>
	<div class="col-8">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) { the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php }
		} ?>
	</div>
<?php get_footer(); ?>