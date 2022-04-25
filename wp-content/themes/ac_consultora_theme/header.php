<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php wp_head();?>
    <title>Hola mundo</title>
</head>
<body>
  <?php wp_admin_bar_header();?>
<div class="ag-navbar">
<!--BRAND LOGO-->
<div class="brand    ">
  <div class=" h-100 pt-3 m-1">
  <div class="d-flex  container ">
    <a href="<?php echo get_home_url(); ?>" class="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="logo " alt="">
    </a>
    <h3 class="ag-title p-2 "> <a href="<?php echo get_home_url(); ?>">Consultora<br> informática</a> </h3>
  </div>
  </div>

  
  <?php
$args = array(
    'theme-location' => 'header-menu',
    'container' => 'nav',
    'container_class' => 'ag-navbar',
    'container_id' => '',
);
wp_nav_menu($args);
?>
</div>



</body>

</html>