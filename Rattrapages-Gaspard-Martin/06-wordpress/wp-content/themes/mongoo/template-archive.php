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

<?php the_custom_logo(); ?>

<?php $loop = new WP_Query(array('post_type' => 'ingredients', 'posts_per_page' => -1)); ?>

<div class="colonne" >
<?php while ($loop->have_posts() ): $loop->the_post(); ?>
    
    <div class="entry-content">
        <?php the_content(); ?>
        <h2> <a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h2>
    </div>

<?php endwhile; ?>
</div>

<?php wp_reset_postdata(); ?>
