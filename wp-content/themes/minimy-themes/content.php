<article id="post-<?php the_ID(); ?>" <?php post_class( jeg_post_class() ); ?> data-article-type="standard">
    <?php
        if ( !get_theme_mod( 'post_hide_meta', 0 ) )
            get_template_part( 'include/postmeta' );
    ?>

    <h1 class="content-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h1>

    <?php if ( get_theme_mod( 'show_meta_date', 0 ) && !get_theme_mod( 'post_hide_meta', 0 ) ) : ?>
    <div class="content-time">
        <span><?php the_date(); ?></span>
    </div>
    <?php endif; ?>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="feature-holder">
            <?php the_post_thumbnail('large') ?>
        </div>
    <?php endif; ?>

    <?php if ( is_single() ) : get_template_part( 'content', 'single' ); else : ?>

        <div class="entry">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="readmore"><?php _e( 'Continue Reading', 'jeg_textdomain') ?></a>
        </div>

    <?php endif; ?>
</article>