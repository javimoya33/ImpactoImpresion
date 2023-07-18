<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
		return;
?>
<?php if ( have_comments() ) : ?>
<h3 class="bd-blog__title-md mb-25"><?php comments_number( esc_html__('0 Comments', 'printress'), esc_html__('1 Comment', 'printress'), esc_html__('% Comments', 'printress') ); ?></h3>
<?php wp_list_comments('callback=printress_theme_comment'); ?>
<?php endif; ?>
<?php
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$comment_args = array(
				'id_form' => 'form',
				'class_form' => 'comment-form',
				'title_reply'=>esc_html__( 'Leave a comment', 'printress' ),
				'title_reply_before' =>'<div class="bd-latest__comments"><h3>',
				'title_reply_after' => '</h3></div>',
				'fields' => apply_filters( 'comment_form_default_fields', array(
						'author' 	=> '<div class="comment-field mb-20">
											<i class="far fa-user"></i>
											<input type="text" placeholder="'.esc_attr__('Your name..', 'printress').'">
										</div>',
						'email'		=> '<div class="comment-field mb-20">
											<i class="far fa-envelope"></i>
											<input type="email" placeholder="'.esc_attr__('Your email..', 'printress').'">
										</div>',
						'website'   => '<div class="comment-field mb-20">
											<i class="far fa-globe"></i>
											<input type="email" placeholder="'.esc_attr__('Your website..', 'printress').'">
										</div>',
				) ),
					'comment_field' => '<div class="comment-field text-area mb-20">
											<i class="far fa-pencil-alt"></i>
											<textarea name="comment" id="message" cols="30" rows="10" placeholder="'. esc_attr__('Write a comment..', 'printress').'"></textarea>
										</div>',
				'label_submit' => esc_html__( 'Post a comment', 'printress' ),
				'submit_button' => '<button class="btn %3$s" >%4$s</button>',
				'submit_field' => '%1$s %2$s',
				'comment_notes_before' => '',
				'comment_notes_after' => '',
		)
?>
<?php if ( comments_open() ) : ?>
<?php comment_form($comment_args); ?>
<?php endif; ?> 