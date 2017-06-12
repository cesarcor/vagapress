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
      $categories = get_categories( array(
       'orderby' => 'name',
       'order'   => 'ASC'
      ) );

       ?>
       <select class="" name="">
       <?php
      foreach( $categories as $category ):
       ?>
        <option value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
       <?php
      endforeach;
      ?>
      </select>
      <?php
    }


  }

  add_action('widgets_init', function(){
    register_widget('vagap_widget_category_grid');
  });
