<?php
/**
 * The template for displaying archive pages
 * 
 * Template Name: template-archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mongoo
 */

get_header();
?>

<?php $loop = new WP_Query(array('post_type' => 'ingredients', 'posts_per_page' => -1)); ?>

<?php while ($loop->have_posts() ): $loop->the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
