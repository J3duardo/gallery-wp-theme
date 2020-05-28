<?php
  add_action("after_setup_theme", "theme_setup");
  function theme_setup() {
    // Habilitar featured images
    add_theme_support("post-thumbnails");

    set_post_thumbnail_size(900, 600);

    // Especificar post formats
    add_theme_support("post-formats", array("gallery"));
  }