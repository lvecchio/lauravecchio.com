<?php $featured_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
<div class="sharing-wrapper bottom circle">
    <div class="meta-article-header">
        <span><?php _e( 'Share this article', 'jeg_textdomain' ); ?></span>
    </div>
    <div class="sharing">
        <?php if ( (is_single() && get_theme_mod( 'post_share_facebook', '1' )) || (is_page() && get_theme_mod( 'page_share_facebook', '1' )) ) : ?>
        <div class="sharing-facebook">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink() ?>"><i class="fa fa-facebook"></i></a>
        </div>
        <?php endif ?>

        <?php if ( (is_single() && get_theme_mod( 'post_share_twitter', '1' )) || (is_page() && get_theme_mod( 'page_share_twitter', '1' )) ) : ?>
        <div class="sharing-twitter">
            <a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php urlencode(esc_url( get_the_title() )); ?>%20-%20<?php echo wp_get_shortlink() ?>"><i class="fa fa-twitter"></i></a>
        </div>
        <?php endif; ?>

        <?php if ( (is_single() && get_theme_mod( 'post_share_googleplus', '1' )) || (is_page() && get_theme_mod( 'page_share_googleplus', '1' )) ) : ?>
        <div class="sharing-google">
            <a target="_blank" href="https://plus.google.com/share?url=<?php echo wp_get_shortlink() ?>"><i class="fa fa-google"></i></a>
        </div>
        <?php endif; ?>

        <?php if ( (is_single() && get_theme_mod( 'post_share_pinterest', '1' )) || (is_page() && get_theme_mod( 'page_share_pinterest', '1' )) ) : ?>
        <div class="sharing-pinterest">
            <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo wp_get_shortlink() ?>&amp;media=<?php echo esc_url( $featured_img ); ?>&amp;description=<?php urlencode(esc_url( get_the_title() )); ?>"><i class="fa fa-pinterest"></i></a>
        </div>
        <?php endif; ?>

        <?php if ( (is_single() && get_theme_mod( 'post_share_linkedin', '1' )) || (is_page() && get_theme_mod( 'page_share_linkedin', '1' )) ) : ?>
        <div class="sharing-linkedin">
            <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo wp_get_shortlink() ?>&amp;title=<?php urlencode(esc_url( get_the_title() )) ?>&amp;summary=<?php echo urlencode( wp_strip_all_tags( get_the_excerpt() )) ?>&amp;source=<?php urlencode( esc_url( get_bloginfo( 'name' ) ) ) ?>"><i class="fa fa-linkedin"></i></a>
        </div>
        <?php endif; ?>
    </div>
</div>