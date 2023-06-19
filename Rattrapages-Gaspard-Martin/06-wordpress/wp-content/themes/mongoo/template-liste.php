<?php
/**
 * The template for displaying archive pages
 * 
 * Template Name: template-liste
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mongoo
 */

get_header();
?>

<?php
// Récupérer les articles du type de contenu personnalisé "ingredients"
$args = array(
    'post_type'      => 'ingredients', // Remplacez "ingredients" par le slug de votre type de contenu personnalisé
    'posts_per_page' => -1, // Récupérer tous les articles
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

<?php get_footer(); ?>
