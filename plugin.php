<?php
/**
 * Plugin Name: Portfolio Projects
 * Description: A Wordpress plugin that creates the portfolio/project post types and taxonomies and adds it to the menu.
 * Author: Jurgen Romeijn <jurgen.romeijn@gmail.com>
 * Author URI: http://www.jurgenromeijn.com
 * Version: 1.4.3
 * Plugin URI: https://github.com/jurgenromeijn/wordpress-plugin-projects
 * License: GPL3
 *
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Load all components
 */
$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/resources/config'));
$loader->load('components.yml');

/**
 * Set up the plugin.
 */
$projectPlugin = $container->get('project_plugin');
$projectPlugin->init();
