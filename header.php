<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <div class="logo">
                        <?php 
                        if ( has_custom_logo() ) {
                            echo get_custom_logo();
                        }
                        ?>
                    </div>
                
                    <?php 

                    $menu = wp_nav_menu( array(
                    'theme_location' => 'header' ,
                    'container'      => false ,
                    'menu_class'     => 'header-menu' ,
                    'menu_id'        => 'nav' ,
                    'echo'           => true ,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>' ,
                    ));

                    if ($menu) : ?>

                    <nav class="menu-nav">
                        <?php echo $menu; ?>
                    </nav>

                    <!-- Mobile burger -->
                    <div class="menu-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <?php endif; ?>
                </div>
            </div>   
        </header>
            