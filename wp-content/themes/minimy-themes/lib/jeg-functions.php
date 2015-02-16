<?php

function jeg_is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function jeg_get_image_src($id) {
    if (!empty($id) && (ctype_digit($id) || is_int($id)) ) {
        $image = wp_get_attachment_image_src($id, "full");
        return $image[0];
    }
    return false;
}

function jeg_populate_social() {
    $socialarray = array();

    // Facebook
    if(get_theme_mod('social_facebook')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-facebook',
            'class' => 'social-facebook',
            'url'   => get_theme_mod('social_facebook'),
            'text'  => 'Facebook'
        );
    }

    // Twitter
    if(get_theme_mod('social_twitter')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-twitter',
            'class' => 'social-twitter',
            'url'   => get_theme_mod('social_twitter'),
            'text'  => 'Twitter'
        );
    }

    // Google Plus
    if(get_theme_mod('social_google_plus')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-google-plus',
            'class' => 'social-googleplus',
            'url'   => get_theme_mod('social_google_plus'),
            'text'  => 'Google Plus'
        );
    }

    // Linkedin
    if(get_theme_mod('social_linkedin')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-linkedin',
            'class' => 'social-linkedin',
            'url'   => get_theme_mod('social_linkedin'),
            'text'  => 'LinkedIn'
        );
    }

    // Pinterest
    if(get_theme_mod('social_pinterest')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-pinterest',
            'class' => 'social-pinterest',
            'url'   => get_theme_mod('social_pinterest'),
            'text'  => 'Pinterest'
        );
    }

    // Flickr
    if(get_theme_mod('social_flickr')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-flickr',
            'class' => 'social-flickr',
            'url'   => get_theme_mod('social_flickr'),
            'text'  => 'Flickr'
        );
    }

    // Tumblr
    if(get_theme_mod('social_tumblr')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-tumblr',
            'class' => 'social-tumblr',
            'url'   => get_theme_mod('social_tumblr'),
            'text'  => 'Tumblr'
        );
    }

    // Youtube
    if(get_theme_mod('social_youtube')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-youtube',
            'class' => 'social-youtube',
            'url'   => get_theme_mod('social_youtube'),
            'text'  => 'youtube'
        );
    }

    // Vimeo
    if(get_theme_mod('social_vimeo')) {
        $socialarray[] = array(
            'icon'  => 'fa fa-vimeo-square',
            'class' => 'social-vimeo',
            'url'   => get_theme_mod('social_vimeo'),
            'text'  => 'Vimeo'
        );
    }

    return $socialarray;
}

function jeg_social_icon($withtext, $class = '') {

    $socials = jeg_populate_social();
    if (empty($socials)) return false;

    $html = '<ul class="socials '. $class .'">';
    foreach($socials as $social) {
        if($withtext) {
            $html .= "<li><a target='_blank' href='" . $social['url'] . "' class='" . $social['class'] . "'><i class='" . $social['icon'] . "'></i>" . $social['text'] . "</a></li>";
        } else {
            $html .= "<li><a target='_blank' href='" . $social['url'] . "' class='" . $social['class'] . "'><i class='" . $social['icon'] . "'></i></a></li>";
        }

    }
    $html .= "</ul>";

    return $html;
}

// Additional Body Class
function jeg_get_additional_body_class() {

    // Menu Position
    $menu_position = get_theme_mod( 'menu_position', 'side' );
    $body_classes[] = 'menu-'. $menu_position;

    // Sidebar
    $enable_sidebar = array(
        'home' => get_theme_mod( 'show_sidebar_on_home', 0 ),
        'posts' => get_theme_mod( 'show_sidebar_on_posts', 1 ),
        'pages' => get_theme_mod( 'show_sidebar_on_pages', 1 ),
    );

    if ( ( is_home() && $enable_sidebar['home'] ) || ( is_page() && $enable_sidebar['pages'] ) || ( is_single()  && $enable_sidebar['posts'] ) )
        $body_classes[] = 'withsidebar';

    return implode(' ', $body_classes);
}

function jeg_get_featured_image() {

    $imgfeatured = wp_get_attachment_image_src( get_post_thumbnail_id($postid), 'full');

    if( !empty($imgfeatured) ) :
        $imgfeatured = jeg_image_resizer($imgfeatured[0], $w);
        $featured =
        "<a href='" . get_permalink($postid) . "'>
            <img src='" .  $imgfeatured . "' alt='" . get_the_title($postid) . "'>
        </a>";
    endif;
}

function jeg_display_tagline() {
    $tagline_home    = get_theme_mod( 'show_tagline_on_home', 1 );
    $tagline_posts   = get_theme_mod( 'show_tagline_on_posts', 1 );
    $tagline_archive = get_theme_mod( 'show_tagline_on_archive', 1 );

    if ( ( is_home() && $tagline_home ) || ( is_archive() && $tagline_archive ) || ( is_single()  && $tagline_posts ) ) : ?>

        <h1 class="introduction"><?php bloginfo('description'); ?></h1>

        <?php
    endif;
}

// Font Customizer
function jeg_get_googlefont() {

    $fonts_list            = array();
    $fonts_weight_list     = array();
    $fonts_json            = wp_remote_get( get_template_directory_uri() . '/lib/customizer/data/gwf.json');
    $fonts                 = json_decode( $fonts_json['body'], true );
    $fonts_list['default'] = 'Theme Default';

    foreach ( $fonts['items'] as $key => $value ) {
        $item_family                     = $fonts['items'][$key]['family'];
        $fonts_list[$item_family]        = $item_family;
        $fonts_weight_list[$item_family] = $fonts['items'][$key]['variants'];
    }

    return array(
        'fonts_list' => $fonts_list,
        'fonts_weight_list' => $fonts_weight_list
    );
}

function jeg_get_googlefont_weight( $fontname, $fontlist ) {
    if ( empty( $fontname ) )
        return array();

    $fontweights = array(
        '100'       => __( 'Ultra Light', 'jeg_textdomain' ),
        '100italic' => __( 'Ultra Light Italic', 'jeg_textdomain' ),
        '200'       => __( 'Light', 'jeg_textdomain' ),
        '200italic' => __( 'Light Italic', 'jeg_textdomain' ),
        '300'       => __( 'Book', 'jeg_textdomain' ),
        '300italic' => __( 'Book Italic', 'jeg_textdomain' ),
        'regular'   => __( 'Regular', 'jeg_textdomain' ),
        'italic'    => __( 'Italic', 'jeg_textdomain' ),
        '500'       => __( 'Medium', 'jeg_textdomain' ),
        '500italic' => __( 'Medium Italic', 'jeg_textdomain' ),
        '600'       => __( 'Semi-Bold', 'jeg_textdomain' ),
        '600italic' => __( 'Semi-Bold Italic', 'jeg_textdomain' ),
        '700'       => __( 'Bold', 'jeg_textdomain' ),
        '700italic' => __( 'Bold Italic', 'jeg_textdomain' ),
        '800'       => __( 'Extra Bold', 'jeg_textdomain' ),
        '800italic' => __( 'Extra Bold Italic', 'jeg_textdomain' ),
        '900'       => __( 'Ultra Bold', 'jeg_textdomain' ),
        '900italic' => __( 'Ultra Bold Italic', 'jeg_textdomain' )
    );

    if ( $fontname == 'default' )
        return $fontweights;

    $result = array();
    foreach ($fontlist['fonts_weight_list'][$fontname] as $key) {
        $result[ $key ] = $fontweights[ $key ];
    }

    return $result;
}

function jeg_custom_excerpt_length( $limit ) {
    $content = wp_strip_all_tags( get_the_excerpt(), true );
    echo wp_trim_words( $content, $limit );
}

function jeg_get_author_name( $author_id='' ) {
    $author_name = trim( get_the_author_meta( 'user_firstname', $author_id ) .' '. get_the_author_meta( 'user_lastname', $author_id ) );
    return empty( $author_name ) ? get_the_author( $author_id ) : $author_name;
}

function jeg_post_class() {
    $class = 'archive-content';

    if ( is_home() ) :
        $class = 'short-content';
    elseif ( is_single() || is_page() ) :
        $class = 'full-content';
    else :
        $class = 'archive-content';
    endif;

    return $class;
}

function jeg_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title = "$title $sep " . sprintf( __( 'Page %s', 'jeg_textdomain' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'jeg_wp_title', 10, 2 );
