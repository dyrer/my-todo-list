<?php
/**
 * Plugin Name: My Todo List
 * Description: Simple todo list
 * Version: 1.0
 * Author: Evangelos Athanasiadis
 */
// Exit if accessed directly
if ( !defined('ABSPATH')) {
	exit;
}

// Load scripts
require_once (plugin_dir_path(__FILE__) . '/includes/my-todo-list-scripts.php');
// Load shortcodes
require_once (plugin_dir_path(__FILE__) . '/includes/my-todo-list-shortcodes.php');

// Check if admin
if (is_admin()) {
	// Load Custom post type
	require_once (plugin_dir_path(__FILE__) . '/includes/my-todo-list-cpt.php');
	// Load Custom fields
	require_once (plugin_dir_path(__FILE__) . '/includes/my-todo-list-fields.php');
}