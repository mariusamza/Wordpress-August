<?php
/*
Plugin Name: WordPress August Plugin
Plugin URI:  https://swissacademy.eu
Description: Some Wordpress 
Version:     0.1
Author:      Marius Amza
Author URI:  https://swissacademy.eu
*/




function wa_image() {
    echo '<img src="http://placehold.it/350x150">';
}

function wa_semnatura($content) {
    echo $content.'<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=1732618140394972" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
}

function wa_notice() {
    echo '<div class="notice notice-error is-dismissible">';
    echo '<p><b>La Multi Ani!</b> Sa cresti mare!</p>';
    echo '</div>';
}


function wa_title($titlu) {
    echo $titlu.' :) ';
}

/* nume shortcode, doar un cuvant */
add_shortcode('imagine_banner','wa_image'); 
add_filter('wp_title','wa_title');
add_filter('the_content','wa_semnatura');
add_action('admin_notices','wa_notice');




