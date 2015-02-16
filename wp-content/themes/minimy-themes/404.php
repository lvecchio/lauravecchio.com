<?php get_header(); ?>

    <section class="container">
        <div class="content-wrapper">

        <div class="error404 entry clearfix">
            <div class="error-title">
                <h1><?php _e( 'Error 404', 'jeg_textdomain' ) ?></h1>
                <h2><?php _e( 'Page Not Found', 'jeg_textdomain' ) ?></h2>
            </div>
            <div class="error-description">
                <p><?php _e( 'The page you are looking for might have been removed or is temporarily unavailable. Please try our search form or back to', 'jeg_textdomain' ); ?> <a href="<?php home_url(); ?>"><?php _e('homepage', 'jeg_textdomain') ?></a></p>
                <?php get_search_form(); ?>
            </div>
        </div>

        </div><!-- .content-wrapper -->

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    </section><!-- .container -->

<?php get_footer(); ?>