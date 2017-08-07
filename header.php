<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
  <header id="top-header">
    <h1 class="title">
      <a href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
  </header>
