<?php

//Activation de la page d'options d'ACF
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Prix des formules');
    acf_add_options_sub_page('Options des anniversaires');
	
}

// Activation du json local
add_filter('acf/settings/save_json', 'my_site_acf_json_save_point'); 
function my_site_acf_json_save_point( $path ) {
    
    // Dans le theme
    $path = get_stylesheet_directory() . '/my_site-acf-json';
    
    return $path;
    
}

?>