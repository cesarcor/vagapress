<?php

  /**
  * SCRIPTS & STYLES
  */
   add_action("wp_enqueue_scripts", "vagap_load_assets");
   function vagap_load_assets(){
      wp_enqueue_style('main-style', get_template_directory_uri() . '/main.css' );
      wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/bootstrap-3.3.7/css/bootstrap.min.css', false, true );
      wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

      wp_dequeue_script('jquery');
      wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery-3.2.0.min.js');
      wp_enqueue_script('boot-js', get_template_directory_uri() . '/assets/bootstrap-3.3.7/js/bootstrap.min.js', false, true);
   }


   /**
   * THEME SUPPORT
   */
   add_theme_support( 'post-thumbnails' );
   add_theme_support('html5', array(
     'search-form'
   ));




   /**
   * CUSTOMIZER
   */
   add_action('after_setup_theme', 'vagap_setup');
   function vagap_setup() {
     add_image_size('vagap-logo', 160, 90);
     add_theme_support('custom-logo', array(
         'width' => 227,
         'height' => 68,
         'flexible-width' => true,
         'flexible-height' => true,
     ));
   }

   require get_template_directory().'/admin/customizer/pressinator-customizer.php';


   /**
   * NAVIGATION MENU
   */
   add_action( 'init', 'vagap_menu');
   function vagap_menu() {
     register_nav_menu('header-nav',__( 'Header Navigation' ));
   }


   /**
   * SIDEBAR
   */
   add_action("widgets_init", "vagap_sidebars");
   function vagap_sidebars(){
     register_sidebar(array(
       'name' => 'Homepage Sidebar',
       'id' => 'sidebar-homepage',
       'before_widget' => '',
       'after_widget' => "",
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => "</h2>"
     ));
  }


  /**
  * FOOTER WIDGET AREAS
  */

  add_action("widgets_init", "vagap_footer_widget_areas");
  function vagap_footer_widget_areas(){
    register_sidebar(array(
      'name' => 'Footer Column 1',
      'id' => 'ftr_col_1',
      'description' => '',
      'before_widget' => '',
      'after_widget' => "",
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>"
    ));

    register_sidebar(array(
      'name' => 'Footer Column 2',
      'id' => 'ftr_col_2',
      'description' => '',
      'before_widget' => '',
      'after_widget' => "",
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>"
    ));

    register_sidebar(array(
      'name' => 'Footer Column 3',
      'id' => 'ftr_col_3',
      'description' => '',
      'before_widget' => '',
      'after_widget' => "",
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>"
    ));

  }


  /**
  * VAGAPRESS WIDGETS
  */

  require get_template_directory().'/admin/widgets/widget-category-grid.php';
