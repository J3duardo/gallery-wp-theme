<?php
  require get_theme_file_path("/widgets/class-wp-widget-categories.php");

  add_action("after_setup_theme", "theme_setup");
  function theme_setup() {
    // Habilitar featured images
    add_theme_support("post-thumbnails");

    set_post_thumbnail_size(900, 600);

    // Especificar post formats
    add_theme_support("post-formats", array("gallery"));
  }

  // Habilitar widgets locations
  add_action("widgets_init", "init_widgets");
  function init_widgets($id) {
    register_sidebar(array(
      "name" => "Sidebar",
      "id" => "sidebar",
    ));
  }

  // Registrar widgets
  add_action("widgets_init", "custom_widgets_register");
  function custom_widgets_register() {
    register_widget("WP_Widget_Categories_Custom");
  }