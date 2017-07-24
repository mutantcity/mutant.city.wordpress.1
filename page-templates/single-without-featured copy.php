<?php
/**
 * Template Name: Single Without Featured Image
 * The template for displaying all single posts with no featured image.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

<main class ="container-fluid">
  <?php while ( have_posts() ) : the_post(); ?>

<article style="padding: 2.5% 0 2.5% 0"; class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <header class="row">
    <div class="col-md-10 col-md-offset-1">
      <?php the_title() ?>
      <hr/>
    </div>
  </header>
  <body class="row">
   <div class="col-md-10 col-md-offset-1">
    <?php the_content() ?>
   </div>
  </body>
 </article>

<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</main><!-- #primary -->

<?php get_footer(); // the bottom part...s?>

