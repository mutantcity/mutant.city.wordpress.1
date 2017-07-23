<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
  return;
?>
<div id="comments" class="comments-area">
  <?php if ( have_comments() ) : ?>
    <div class="comment-list">
      <?php wp_list_comments( 'type=comment&callback=mytheme_comment_2' ); ?>
    </div><!-- .comment-list -->
  <?php endif; // have_comments() ?>
  <hr/>
  <hr style="border-top: 0px solid #e7e7e7">
  <?php custom_comment_form(); ?>
</div><!-- #comments -->