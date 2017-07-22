<?php
/**
 * The main template file.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mutant
 */
?>

<?php get_header() // the fricking top part...?>

  	<main class="container-fluid" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post post-index-page">

              <a href="<?php the_permalink(); ?>"
                  rel="bookmark"
                  title="Permanent Link to <?php the_title_attribute(); ?>">
                <?php the_title(); ?>
              </a>
                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

        </div>


      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>


  	</main><!-- #main -->

<?php get_footer(); //the bottom part?>

