<?php
/*
* Plugin Name: Agovi Custom Plugin
* Plugin URI: 
* Description: 
* Version: 1.0
* Author: Asaka
* Author URI: 
*/

//Exit if accessed directly
if(!defined('ABSPATH'))
{
    exit;
}

// Load Home Page Template
require_once(plugin_dir_path(__FILE__).'/includes/page-templater.php');