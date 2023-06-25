<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mongoo
 */

?>

<nav id="site-navigation" class="main-navigation">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>
</nav><!-- #site-navigation -->

<?php
if (!function_exists('get_field')) return;

$custom_field_1 = get_field('option_couleur');
$custom_field_2 = get_field('option_prix');
?>

<?php
	$current_page_id = get_queried_object_id();

	$args = array(
		'post_type'      => 'ingredients',
		'posts_per_page' => -1, 
		'post__in'       => array( $current_page_id ), 
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

		}
	}

	?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header" style="background-color: <?php echo $custom_field_1; ?>">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo '<p>' . 'prix : ' . $custom_field_2 . '€' . '</p>';
			echo '<ul>';
			for ($i = 0; $i < count($all_terms); $i++) {
				echo '<li>' . $all_terms[$i]->name. '</li>';
			}
			echo '</ul>';

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mongoo' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mongoo' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

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

	<?php mongoo_post_thumbnail(); ?>

	<footer class="entry-footer">
		<?php mongoo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
