<?php
if ( function_exists('register_sidebars') )
    register_sidebars(2);

function delete_dashboard_widgets() {
    global $wp_meta_boxes;
    // Aktuelle

//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    // Letzte Kommentare

unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    // Plugin

unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    // Eingehende Links

//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    // Quickpress

//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    //entfernt das Aktuelle Entwürfe Widget

unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // WordPress Deutschland Blog DE-Version

unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    // Weitere WordPress-News

unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}
add_action('wp_dashboard_setup', 'delete_dashboard_widgets');

// dseiler, 2020-05-06
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="nav-link"';
}

// dseiler, 2020-05-06
add_filter('the_category', 'category_label_list');
add_filter('the_tags', 'tag_label_list');
function category_label_list($thelist) {
  return str_replace("href=\"", "class=\"badge badge-secondary\" href=\"", $thelist);
}
function tag_label_list($thelist) {
  return str_replace("href=\"", "class=\"badge badge-light\" href=\"", $thelist);
}

?>
