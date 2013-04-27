<?php
  if(function_exists("register_nav_menus")) {
    register_nav_menus(array("primary" => "Header navigation"));
  }

  if(function_exists("add_theme_support")) {
    add_theme_support("post-thumbnails");
  }

  if(function_exists("add_image_size")) {
    add_image_size("featured", 640, 480, true);
    add_image_size("post-thumb", 320, 240, true);
  }
?>