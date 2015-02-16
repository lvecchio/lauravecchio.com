<article id="post-<?php the_ID(); ?>" <?php post_class( jeg_post_class() ); ?> data-article-type="link">
    <?php
        if ( !get_theme_mod( 'post_hide_meta', 0 ) )
            get_template_part( 'include/postmeta' );
    ?>

    <div class="entry">
        <a href="<?php echo esc_attr(get_post_meta($post->ID, '_format_link_url', true)); ?>" class="link-post">
            <?php the_title(); ?> <i class="fa fa-long-arrow-right"></i>
        </a>
        <p><?php the_content(); ?></p>
    </div>
</article>