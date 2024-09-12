<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Webhavva Test</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
            <?php 

            $menu = wp_nav_menu( array(
            'theme_location' => 'header-menu' ,
            'container'      => false ,
            'menu_class'     => 'header-menu' ,
            'menu_id'        => 'nav' ,
            'echo'           => false ,
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>' ,
            ));
            if ($menu) : ?>

            <nav class="menu-nav">
                <?php echo $menu; ?>
            </nav>

            <?php endif; ?>
            </div>   
        </header>
    