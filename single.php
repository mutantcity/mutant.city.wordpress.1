<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

<main class ="container-fluid">
  <?php while ( have_posts() ) : the_post(); ?>
  <article>
      <article style="padding: 2.5% 0 2.5% 0"; class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
           <div class="col-md-2">
                <?php the_post_thumbnail('full', array( 'class' => 'img-responsive img-rounded' )); ?>
            </div>
            <div class="col-md-10">
               <?php the_title() ?>
                Posted: <?php the_date() ?> <br/>
                By: <?php the_author() ?>
                <hr/>
                <?php the_content() ?>
            </div>
      </article>

            <div class="row">
             <div class="col-md-12" style="border-bottom: solid #eee 0px"></div>
            </div>

      <section>
          <header>
            <div style="font-weight: bold">Please Leave A Comment</div>
            <hr/>
          </header>

          <?php if ( comments_open() || get_comments_number() ) :
           comments_template();
          endif;
          ?>
      </section>
  </article>

  <?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>
