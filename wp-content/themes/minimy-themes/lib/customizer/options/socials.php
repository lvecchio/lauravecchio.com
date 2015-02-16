<?php

global $wp_customize;

/*** Social Media Accounts Settings **/
new Jeg_Customizer_Framework(
    array(
        'name'          => 'jeg_option_socials',
        'title'         => 'Social Media',
        'priority'      => 6,
        'description'   => 'Set link of your social media accounts or leave it blank to hide it.'
    ),
    array(

        array(
            'type'      => 'text',
            'name'      => 'social_facebook',
            'title'     => 'Facebook',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_twitter',
            'title'     => 'Twitter',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_google_plus',
            'title'     => 'Google Plus',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_linkedin',
            'title'     => 'LinkedIn',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_pinterest',
            'title'     => 'Pinterest',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_flickr',
            'title'     => 'Flickr',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_tumblr',
            'title'     => 'Tumblr',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_youtube',
            'title'     => 'Youtube',
            'transport' => 'refresh',
            'default'   => ''
        ),
        array(
            'type'      => 'text',
            'name'      => 'social_vimeo',
            'title'     => 'Vimeo',
            'transport' => 'refresh',
            'default'   => ''
        ),

), $wp_customize);