<?php

/** 
 * @package shahzad
 */
/**
 * Plugin Name: shahzad
 * Plugin URI: https//shahzad.com/plugin/
 * Description: this is my first attempt for creating custom plugin
 * Version:1.0.0 
 * Author: Shahzad Tashkynov
 * Author URI: http://github.com
 * License: GPLV2 or later
 * Text Domain shahzad
 */

class Shahzad
{
    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }
    function activate()
    {
        // this code generates a Custom post type
        $this->custom_post_type();
        //flush rewrite rules from database
        flush_rewrite_rules();
    }
    function deactivate()
    {
        flush_rewrite_rules();
    }
    function uninstall()
    {
    }
    function custom_post_type ()
    {
        register_post_type('book',['public'=>true,'label'=>'Books']);
    }
}
if (class_exists('Shahzad')) {
    $shahzad = new Shahzad();
}

register_activation_hook(__FILE__, array($shahzad, 'activate'));


register_deactivation_hook(__FILE__, array($shahzad, 'deactivate'));

register_uninstall_hook(__FILE__, array($shahzad, 'uninstall'));

