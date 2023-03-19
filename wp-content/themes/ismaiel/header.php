
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" type="image/x-icon">

    <?php
    wp_head()
    ?>

</head>

<body>



<header class="nav-header">
<nav class="navbar navbar-expand-md navbar-inverse navbar-light bg-white" role="navigation">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php if(function_exists('the_custom_logo')){
    $custom_logo_id = get_theme_mod ('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id); 
  } ?>
 <img class="navbar-brand" src="<?php echo $logo[0] ?>" alt="logo" >
 </h5></a>        <?php
        wp_nav_menu( array(
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ',
            'ul'                => 'active',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

<!-- <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#"><h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php if(function_exists('the_custom_logo')){
    $custom_logo_id = get_theme_mod ('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id); 
  } ?>
 <img class="navbar-brand" src="<?php echo $logo[0] ?>" alt="logo" >
 </h5></a>     <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
      <a class="navbar-brand" href="#"><h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php if(function_exists('the_custom_logo')){
    $custom_logo_id = get_theme_mod ('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id); 
  } ?>
 <img class="navbar-brand" src="<?php echo $logo[0] ?>" alt="logo" >
 </h5></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <?php
        wp_nav_menu( 
          array(
            // 'theme_location'    => 'Navigation Bar',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => ' offcanvas-body' ,
            'container_id'      => ' navbar-nav justify-content-end flex-grow-1 pe-3',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
        )) ;
      ?>
      </div>
    </div>
  </div>
</nav> -->





 </header>
