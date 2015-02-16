<?php get_header(); ?>

    <section class="container">
        <div class="archive-header">
            <span><?php _e( 'Search Result For', 'jeg_textdomain' ); ?></span>
            <h1 class="page-title"><?php echo '"'. get_search_query() .'"' ?></h1>
        </div>

        <?php if ( have_posts() ) : ?>
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
            ?>

            <!-- No Content Found -->
            <article class="no-content short-content">
                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jeg_textdomain' ); ?></p>
            </article>

        <?php endif; ?>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>