<?php
/**
 * Plugin Name: Portfolio Projects
 * Description: A Wordpress plugin that creates the portfolio/project post types and taxonomies and adds it to the menu.
 * Author: Jurgen Romeijn <jurgen.romeijn@gmail.com>
 * Author URI: http://www.jurgenromeijn.com
 * Version: 1.4.1
 * Plugin URI: https://github.com/jurgenromeijn/wordpress-plugin-projects
 * License: GPL3
 *
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

/**
 * Autoload all classes by using the composer auto loader.
 */
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

/**
 * Set up the plugin.
 */
$projectPlugin = \JurgenRomeijn\Projects\ProjectPlugin::getInstance();
$projectPlugin->init();
