<?php
/**
 * The template for displaying archive pages
 * 
 * Template Name: template-single
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mongoo
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (!function_exists('get_field')) return;

	while ( have_posts() ) :
		the_post();

		// Récupérer les données ACF spécifiques à votre CPT
		$custom_field_1 = get_field('option_couleur');
		$custom_field_2 = get_field('option_prix');

		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_content();

				// Utiliser les données récupérées dans votre contenu single
				echo '<h2>' . $custom_field_1 . '</h2>';
				echo '<p>' . $custom_field_2 . '</p>';

				?>
			</div><!-- .entry-content -->


	<?php
	endwhile; // Fin de la boucle.
	?>

</main><!-- #main -->


