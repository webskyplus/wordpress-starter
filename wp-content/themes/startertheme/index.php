<?php
/**
 * The main template file.
 */
get_header();?>

<div class="main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_title();
			the_content();
	endwhile;
	else :
		echo 0;
	endif;
	?>
</div>

<?php
	get_footer();
?>
