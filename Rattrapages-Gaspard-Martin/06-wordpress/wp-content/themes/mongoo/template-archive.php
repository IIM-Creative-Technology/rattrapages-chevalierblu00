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

    <a href="<?php echo get_permalink(); ?>">
    <div class="entry-content">
        <?php the_content(); ?>
        <h2><?php the_title(); ?></h2>
        
    </div>
    </a>

<?php endwhile; ?>
</div>

