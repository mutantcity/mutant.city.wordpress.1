<?php


/*
The core class for the comment_form() function:
https://github.com/WordPress/WordPress/blob/master/wp-includes/comment-template.php#L2166

The codex has all the info needed here:

*/


function custom_comment_form(){

    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields =  array(
      'author' =>
        '<div class="row"><div class="col-md-4">' .
        '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
        ( $req ? '<span class="required">(required)</span>' : '' ) .
        '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . ' /></p>'.
        '</div></div>',

      'email' =>
        '<div class="row" class="comment-form-email"><div class="col-md-4">' .
        '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" class="form-control" type="text" value="anonymoose@comment.com" size="30"' . $aria_req . ' /></p>' .
        '</div></div>',

      'url' =>
        '<div class="row" class="comment-form-url"><div class="col-md-4">' .
        '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
        '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
        '" size="30" /></p>' .
        '</div></div>',
    );

    $comment_field =  '<div class="row"> <div class="col-md-12">
                        <p class="comment-form-comment">
                          <label for="comment">' . _x( 'Comment', 'noun' ) .'</label>
                          <textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true">' .
                          '</textarea>
                        </p>
                      </div></div>';

    $args = array(
      'id_form'           => 'commentform',
      'class_form'      => 'comment-form',
      'id_submit'         => 'submit',
      'class_submit'      => 'submit btn btn-primary',
      'name_submit'       => 'submit',
      'title_reply'       => __( '' ),
      'title_reply_to'    => __( 'Leave a Reply to %s' ),
      'cancel_reply_link' => __( 'Cancel Reply' ),
      'label_submit'      => __( 'Post Comment' ),
      'format'            => 'xhtml',

      'comment_field' => $comment_field,

      'must_log_in' => '<p class="must-log-in">' .
        sprintf(
          __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
        ) . '</p>',

      'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
        __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
          admin_url( 'profile.php' ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
        ) . '</p>',

      'comment_notes_before' => '<p class="comment-notes">' .  ( $req ? $required_text : '' ) .'</p>',

      'comment_notes_after' => '<p class="form-allowed-tags">' .
        sprintf(
          __( '<u>You may use these HTML tags and attributes</u>%s' ),
          ' <div><code>' . allowed_tags() . '</code></div>'
        ) . '</p>',

      'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );


    comment_form( $args );
}


/*
  This is the standard default basic comment form that comes with the basic WP installation
  Primarily needed as a reference for the custom form above.
*/
function default_comment_form(){

    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields =  array(
      'author' =>
        '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . ' /></p>',

      'email' =>
        '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . ' /></p>',

      'url' =>
        '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
        '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
        '" size="30" /></p>',
    );

    $comment_field =  '<p class="comment-form-comment">
                          <label for="comment">' . _x( 'Comment', 'noun' ) .'</label>
                          <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                          '</textarea>
                      </p>';

    $args = array(
      'id_form'           => 'commentform',
      'class_form'      => 'comment-form',
      'id_submit'         => 'submit',
      'class_submit'      => 'submit',
      'name_submit'       => 'submit',
      'title_reply'       => __( 'Leave a Reply' ),
      'title_reply_to'    => __( 'Leave a Reply to %s' ),
      'cancel_reply_link' => __( 'Cancel Reply' ),
      'label_submit'      => __( 'Post Comment' ),
      'format'            => 'xhtml',

      'comment_field' => $comment_field,

      'must_log_in' => '<p class="must-log-in">' .
        sprintf(
          __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
        ) . '</p>',

      'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
        __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
          admin_url( 'profile.php' ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
        ) . '</p>',

      'comment_notes_before' => '<p class="comment-notes">' .
        __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
        '</p>',

      'comment_notes_after' => '<p class="form-allowed-tags">' .
        sprintf(
          __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
          ' <code>' . allowed_tags() . '</code>'
        ) . '</p>',

      'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );


    comment_form( $args );
}