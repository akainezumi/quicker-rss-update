<?php
/**
 * Plugin Name: Quicker RSS Update
 * Version: 1.0.0
 * Plugin URI: https://github.com/akainezumi/quicker-rss-update
 * Description: Refreshes the RSS Feed quicker
 * Author: AkaiNezumi
 * Author URI: https://github.com/akainezumi/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: thumbnail-rss
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

add_filter('wp_feed_cache_transient_lifetime', function(){ return 30; });