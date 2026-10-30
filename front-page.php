<?php
if (!defined('ABSPATH')) { exit; }
if (is_page() && get_page_template_slug(get_queried_object_id()) === 'page-maintenance.php') {
    require get_stylesheet_directory().'/page-maintenance.php';
} else {
    require get_template_directory().'/front-page.php';
}
