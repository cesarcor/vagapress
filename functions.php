<?php

  /**
  * Load scrips and style files
  */
   add_action("wp_enqueue_scripts", "vagap_load_assets");
   function vagap_load_assets(){
      wp_enqueue_style('main-style', get_template_directory_uri() . '/main.css' );
      wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/bootstrap-3.3.7/css/bootstrap.min.css', false, true );
      wp_dequeue_script('jquery');
      wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery-3.2.0.min.js');
      wp_enqueue_script('boot-js', get_template_directory_uri() . '/assets/bootstrap-3.3.7/js/bootstrap.min.js', false, true);
   }


   /**
   * Add sidebars
   */
   add_action("widgets_init", "vagap_sidebars");
   function vagap_sidebars(){
     register_sidebar(array(
       'name' => 'Homepage Sidebar',
       'id' => 'sidebar-homepage',
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => "</li>n",
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => "</h2>n"
     ));
  }
