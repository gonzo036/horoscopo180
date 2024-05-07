<?php
/**
*	Template Name: Blog Index
*	Description: The template for displaying the Blog index /blog.
*/
	get_header();
	$page_id = get_option( 'page_for_posts' );
	$theme_uri = get_stylesheet_directory_uri();
?>

<div class="row">

	<div class="col-md-12"><!-- LISTA DE POST -->
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div><!-- /.col -->
</div><!-- /.row -->
<?php
get_footer();
