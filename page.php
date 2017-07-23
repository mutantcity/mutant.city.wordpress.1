<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

<?php get_header() // the fricking top part...?>

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
       <div class="col-md-3 col-md-offset-1">
        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
      </div>
      <div class="col-md-8">
       <?php the_content() ?>
     </div>
   </body>
 </article>

<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</main><!-- #primary -->

<?php get_footer(); // the bottom part...s?>

