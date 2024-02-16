<?php

if( function_exists('theme_setup_functions')):

    function theme_setup_functions(){
        
    }

    add_action ( 'after-setup-theme.php', 'theme_setup_functions');

endif;


add_action ('wp_enqueue_scripts', 'carclub_scripts');

function carclub_scripts () {
    wp_enqueue_style ('carclub_styles', get_template_directory_uri() . '/assets/css/style.css', array (), filemtime (get_template_directory() . '/assets/css/style.css'));
}

?>
