<?php
function widget_vimeo_albums($args) {
    extract($args, EXTR_SKIP);
    echo $before_widget;
    //list_upcoming_posts();
    echo $after_widget;
}

function load_widgets(){
  wp_register_sidebar_widget('vimeo_albums','Vimeo Albums','widget_vimeo_albums');

  add_action("plugins_loaded","");
}

function plugin_init(){
   load_widgets();
}
/***
 * File:functions.php
 * Author: Shawn Rhoney
 */