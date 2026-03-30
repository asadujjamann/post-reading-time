<?php

/**
 * Plugin Name: Post Reading Time
 * Plugin URI: asadujjamann.github.io
 * Description: This is a simple plugin for calculate the estimate reading time of post
 * Version: 1.0.0
 * Requires at lest: 5.2
 * Requires PHP: 7.2
 * Author: Asad
 * Author URI: asadujjamann.github.io
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: post-reading-time
*/

defined("ABSPATH") or die("Direct Access is not Allowed!");


add_filter("the_content", "post_readint_time");

function post_readint_time($content)
{
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    $message = "<p><em>Estimate Reading Time: ". $reading_time ."</em></p>";
    return $message . $content;
}


