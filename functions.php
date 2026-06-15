<?php

add_editor_style();

// Shortcode for yellow text
add_shortcode('yellow-text', 'yellow_text_cb');
function yellow_text_cb($atts, $content = null ){
    return '<span class="yellow">' . $content . '</span>';
}

// Shortcode for line break
add_shortcode('br', 'br_cb');
function br_cb(){
    return '<br>';
}

// Shortcode for current year
add_shortcode('current-year', 'current_year_cb');
function current_year_cb(){
    return date('Y');
}

// Theme Updater
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
$myUpdateChecker = PucFactory::buildUpdateChecker('https://github.com/BizInk/covert-child-roofertaxsavings',__FILE__,'covert-child-roofertaxsavings');
$myUpdateChecker->setBranch('main');