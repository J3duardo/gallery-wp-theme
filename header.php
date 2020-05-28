<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>">
    <title><?php bloginfo("title")?></title>
    <?php wp_head() ?>
  </head>
  <body <?php body_class()?>>
    <header class="w3-container w3-teal">
      <div class="w3-row">
        <div class="w3-col m9 l9">
          <a href="<?php echo get_site_url("/")?>"><h1><?php bloginfo("name")?></h1></a>
        </div>
        <div class="w3-col m3 l3">
          <form method="GET" action="<?php echo esc_url(home_url("/"))?>">
            <input type="text" name="s" class="w3-input" placeholder="Search">        
          </form>
        </div>
      </div>
    </header>

    <div class="w3-row">
      <!-- Sidebar widget -->
      <aside class="w3-col m3 l3 sidebar">
        <?php if(is_active_sidebar("sidebar")) : ?>
          <?php dynamic_sidebar("sidebar")?>
        <?php endif ?>
      </aside>