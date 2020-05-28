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
          <h1><?php bloginfo("name")?></h1>
        </div>
        <div class="w3-col m3 l3">
          <input type="text" class="w3-input" placeholder="Search">
        </div>
      </div>
    </header>

    <div class="w3-row">
      <!-- Sidebar -->
      <aside class="w3-col m3 l3 sidebar">
        <ul class="w3-ul">
          <li><a href="#">Nature</a></li>
          <li><a href="#">Animals</a></li>
          <li><a href="#">Objects</a></li>
          <li><a href="#">People</a></li>
          <li><a href="#">Abstract</a></li>
        </ul>
      </aside>