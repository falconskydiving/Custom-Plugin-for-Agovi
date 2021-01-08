<?php
    // Add Scripts
    function agovi_homepage_add_scripts(){
        //Add HomePage CSS
        wp_enqueue_style('agovi-homepage-style', plugins_url(). '/agovi-custom-plugin/css/homepage.css');

        //Add HomePage JS
        wp_enqueue_script('agovi-homepage-script', plugins_url(). '/agovi-custom-plugin/js/homepage.js');
    }

    add_action('init', 'agovi_homepage_add_scripts');