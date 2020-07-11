<?php
/*
Plugin Name: Student Scholership
Plugin URI:
Description:
Author:
Version:
Author URI:
*/

register_activation_hook(__FILE__, 'student_scholership_activate');
register_deactivation_hook(__FILE__, 'student_scholership_deactivate');

function student_scholership_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/student_scholership_loader.php';
    $loader = new StudentScholershipLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function student_scholership_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/student_scholership_loader.php';
    $loader = new StudentScholershipLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
