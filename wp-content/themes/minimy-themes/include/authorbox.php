<div class="author-box">
    <?php echo get_avatar( get_the_author_meta( 'ID' ) ) ?>
    <div class="author-box-wrap">
        <h5><?php echo jeg_get_author_name(); ?></h5>
        <?php if ( get_the_author_meta( 'description' ) ) : ?>
            <p><?php the_author_meta( 'description' ); ?></p>
        <?php endif; ?>
        <ul>
            <?php if ( get_the_author_meta( 'twitter' ) ): ?>
                <li><a class="author-twitter" href="<?php the_author_meta( 'twitter' ); ?>"><?php _e( 'Twitter', 'jeg_textdomain' ) ?></a></li>
            <?php endif ?>
            <?php if ( get_the_author_meta( 'facebook' ) ): ?>
                <li><a class="author-facebook" href="<?php the_author_meta( 'facebook' ); ?>"><?php _e( 'Facebook', 'jeg_textdomain' ) ?></a></li>
            <?php endif ?>
        </ul>
    </div>
</div>