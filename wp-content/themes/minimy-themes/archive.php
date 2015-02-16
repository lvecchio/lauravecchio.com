<?php get_header(); ?>

    <section class="container">

        <?php if ( have_posts() ) : ?>

            <div class="archive-header">
                <?php
                    if ( is_day() ) :
                        echo _e( '<span>Daily Archives</span>', 'jeg_textdomain' );
                        printf( __( '<h1 class="page-title">%s</h1>', 'jeg_textdomain' ), get_the_date() );

                    elseif ( is_month() ) :
                        echo _e( '<span>Monthly Archives</span>', 'jeg_textdomain' );
                        printf( __( '<h1 class="page-title">%s</h1>', 'jeg_textdomain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'jeg_textdomain' ) ) );

                    elseif ( is_year() ) :
                        echo _e( '<span>Yearly Archives</span>', 'jeg_textdomain' );
                        printf( __( '<h1 class="page-title">%s</h1>', 'jeg_textdomain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'jeg_textdomain' ) ) );

                    elseif ( is_category() ) :
                        echo _e( '<span>Posts in Category</span>', 'jeg_textdomain' );
                        printf( __( '<h1 class="page-title">%s</h1>', 'jeg_textdomain' ), single_cat_title( '', false ) );

                    elseif ( is_tag() ) :
                        echo _e( '<span>Posts in Tag</span>', 'jeg_textdomain' );
                        printf( __( '<h1 class="page-title">%s</h1>', 'jeg_textdomain' ), single_tag_title( '', false ) );

                    elseif ( is_search() ) :
                        echo _e( '<span>Search Result For</span>', 'jeg_textdomain' );
                        printf( __( '<h1 class="page-title">%s</h1>', 'jeg_textdomain' ), get_search_query() );

                    else :
                        _e( '<h1 class="page-title">Archives</h1>', 'jeg_textdomain' );

                    endif;

                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<h2 class="taxonomy-description">%s</h2>', $term_description );
                    endif;
                ?>
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