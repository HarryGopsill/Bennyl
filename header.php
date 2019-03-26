<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/assets/css/style.css'?>">
  <title> <?php echo wp_title();?> </title>
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(). '/assets/images/title.png'?>">
    
    <?php wp_head(); ?>
    
</head>

<body>
    

  <header class="site-header">
    <a href="/"><img class="site-header__logo" alt="benny l logo" src="<?php echo get_template_directory_uri(). '/assets/images/logo.png'?>"></a>

    <nav class="site-header__nav">
      <ul>
        <li class="site-header__item site-header__item--active hvr-float"><a href="/">Home</a></li>
        <li class="site-header__item hvr-float"><a href="/releases">Releases</a></li>
      </ul>
    </nav>
  </header>