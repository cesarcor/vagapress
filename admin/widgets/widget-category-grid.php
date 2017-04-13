<?php

  class vagap_widget_category_grid extends WP_Widget{

    public function __construct(){
      $wiops = array(
        'classname' => 'category-grid',
        'description' => 'Add a 2 column, 2 row grid with image to link to categories');

      parent::__construct('vagap_category_grid', 'Vagapress Category Grid', $wiops);

    }

    public function widget($args, $instance){

    }

    public function form($instance){
      echo 'nothing for now';
    }


  }

  add_action('widgets_init', function(){
    register_widget('vagap_widget_category_grid');
  });
