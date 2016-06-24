<?php
/**
 * Plugin Name: Portfolio Projects
 * Description: A plugin that creates the portfolio/project post types and taxonomies and adds it to the menu.
 * Author: Jurgen Romeijn <jurgen.romeijn@gmail.com>
 * Author URI: http://www.jurgenromeijn.com
 * Version: 0.1
 * Plugin URI: https://github.com/jurgenromeijn/wordpress-plugin-projects
 * License: GPL3
 *
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

add_action('init', array('\JurgenRomeijn\Projects\Service\ProjectService', 'createPostType'));
add_action('init', array('\JurgenRomeijn\Projects\Service\ProjectService', 'createTaxonomy'));