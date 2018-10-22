<?php
if ( function_exists('register_sidebars') )
    register_sidebars(1);

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

?>
