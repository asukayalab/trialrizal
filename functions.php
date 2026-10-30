<?php
if (!defined('ABSPATH')) { exit; }

add_action('wp_enqueue_scripts', static function (): void {
    if (!is_page_template('page-maintenance.php')) { return; }
    wp_enqueue_style('trialrizal-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,900;1,300&display=swap', [], null);
    wp_enqueue_style('trialrizal-maintenance', get_stylesheet_directory_uri().'/assets/maintenance.css', ['falcon-theme', 'trialrizal-font'], wp_get_theme()->get('Version'));
    wp_register_script('trialrizal-motion', false, [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('trialrizal-motion');
    wp_add_inline_script('trialrizal-motion', require get_stylesheet_directory().'/assets/motion.php');
});

// Maintenance pages should not be indexed; does not alter site-wide settings.
add_filter('wp_robots', static function (array $robots): array {
    if (is_page_template('page-maintenance.php')) { $robots['noindex'] = true; unset($robots['index']); }
    return $robots;
});
