<?php
  add_action('customize_register', 'pressinator_customizer');
  function pressinator_customizer($wp_customize){
    $wp_customize->add_section("menu", array(
		"title" => __("Menu", "pressinator_menu_sections"),
		"priority" => 30,
	));

  }
