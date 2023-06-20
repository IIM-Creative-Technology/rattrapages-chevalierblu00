<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mongoo
 */

?>

<?php
if (!function_exists('get_field')) return;

// Récupérer les données ACF spécifiques à votre CPT
$custom_field_1 = get_field('option_couleur');
$custom_field_2 = get_field('option_prix');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			// Utiliser les données récupérées dans votre contenu single
		echo '<h2>' . $custom_field_1 . '</h2>';
		echo '<p>' . $custom_field_2 . '</p>';
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				mongoo_posted_on();
				mongoo_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<?php
	// Récupérer l'ID de la page courante
	$current_page_id = get_queried_object_id();

	// Récupérer les articles du type de contenu personnalisé "ingredients"
	$args = array(
		'post_type'      => 'ingredients', // Remplacez "ingredients" par le slug de votre type de contenu personnalisé
		'posts_per_page' => -1, // Récupérer tous les articles
		'post__in'       => array( $current_page_id ), // Utiliser l'ID de la page courante
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$terms_boissons = wp_get_post_terms( get_the_ID(), 'boissons' );
			$terms_desserts = wp_get_post_terms( get_the_ID(), 'desserts' );
			$terms_ingredients_salade = wp_get_post_terms( get_the_ID(), 'ingredients_salade' );
			$terms_salades = wp_get_post_terms( get_the_ID(), 'salades' );

			$all_terms = array_merge( $terms_boissons, $terms_desserts, $terms_ingredients_salade, $terms_salades );

			if ( ! empty( $all_terms ) && ! is_wp_error( $all_terms ) ) {
				echo '<ul>';
				foreach ( $all_terms as $term ) {
					echo '<li>' . $term->name . '</li>';
				}
				echo '</ul>';
			}
		}
	}

	// Réinitialisation de la requête principale de WordPress
	wp_reset_postdata();
	?>

	<?php mongoo_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mongoo' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);


		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mongoo' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mongoo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
