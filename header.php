<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newweb</title>
</head>
<body>
    <!-- header part starting -->
    <?php
    $logoimg=get_header_image();
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg; ?>"></a>
  
  <?php
wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'));
  ?>
</nav>
<!-- header part ends here -->
