<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

<div class ="container-fluid">
	<?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="row">
          <div class="col-md-12 post-title-area">
            <h2><?php the_title() ?></h2>
          </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="row">
              <div class="col-md-12">
              <?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
              </div>
          </div>

          <div class="row post-info-area">
            <div class="col-md-12">
              Posted: <?php the_date() ?> <br/>
              By: <?php the_author() ?>
            </div>
          </div>
        </div>

        <div class="col-md-9 the-content">
          <?php the_content() ?>
        </div>

      </div>
    </article><!-- #post-## -->

    <hr style="border-top: 5px solid #e7e7e7">

    <?php if ( comments_open() || get_comments_number() ) :
     comments_template();
    endif;
    ?>

	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
