<div class="content-meta">

    <span class="meta-author"><?php _e( 'By', 'jeg_textdomain' ) ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo jeg_get_author_name() //the_author(); ?></a></span>
    <span class="meta-category"><?php _e( 'in', 'jeg_textdomain' ) ?> <?php the_category(', '); ?></span>

    <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
        <span class="meta-comment"><?php comments_popup_link( __( 'No Comments', 'jeg_textdomain' ), __( '1 Comment', 'jeg_textdomain' ), __( '% Comments', 'jeg_textdomain' ) ); ?></span>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'show_meta_date', 0 ) && (has_post_format( 'aside' ) || has_post_format( 'quote' )) ) : ?>
        <span class="meta-date"><?php the_date(); ?></span>
    <?php endif; ?>

</div>