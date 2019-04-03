<?php get_header(); ?>
<div class="col-8">
<?php
if ( have_posts() ) {
	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content/content' );
	}
} else {
	// If no content, include the "No posts found" template.
	?> No content to display <?php
}
?>
</div>
<?php get_footer(); ?>