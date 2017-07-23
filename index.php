<?php
/**
 * The main template file.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mutant
 */
?>

<?php get_header() // the fricking top part...?>

<main class="container-fluid" role="main">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="post post-index-page row" style="padding: 2.5% 0 2.5% 0";>
        <div class="col-md-2">
          <?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
        </div>
        <div class="col-md-10">
          <a href="<?php the_permalink(); ?>"
            rel="bookmark"
            title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
          <br/>
          <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
          <hr>
          <?php the_content() ?>
        </div>
      </article>

      <div class="row">
       <div class="col-md-12" style="border-bottom: solid #eee 4px"></div>
     </div>
   <?php endwhile; ?>
   <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
   <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
 <?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main><!-- #main -->

<?php get_footer(); //the bottom part?>

