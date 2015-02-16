<?php get_header(); ?>

    <section class="container">

        <?php if ( have_posts() ) : ?>

            <div class="archive-header">
                <span><?php _e( 'Posted By', 'jeg_textdomain' ) ?></span>
                <h1><?php echo jeg_get_author_name(); ?></h1>

                <div class="archive-image"><?php echo get_avatar( get_the_author_meta( 'ID' ) ) ?></div>

                <?php if ( get_the_author_meta( 'description' ) ) : ?>
                    <p class="author-description"><?php the_author_meta( 'description' ); ?></p>
                <?php endif; ?>
            </div><!-- .archive-header -->

            <div class="archive-body">
                <?php
                    // Start the Loop.
                    while (have_posts()) : the_post();

                        // Include the Archive template for the content.
                        get_template_part( 'content', 'archive' );

                    endwhile;
                ?>
            </div>

            <?php
                // Pagination
                get_template_part( 'include/pagination' );

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content', 'none' );
            ?>

        <?php endif; ?>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>