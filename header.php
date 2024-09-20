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
            <div class="header__container">
                <div class="logo">
                    <?php 
                    if ( has_custom_logo() ) {
                        echo get_custom_logo();
                    }
                    ?>
                </div>
                <div class="header__menu menu">
                    <div class="menu__icon">
                        <!-- .menu__icon::before -->
                    </div>
                    <nav class="menu__body">
                        <?php 
                            wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,    
                                'menu_id'              => false,    
                                'echo'                 => true,
                                'depth'                => 0,       
                                'items_wrap'           => '<ul id="%1$s" class="menu_list %2$s">%3$s</ul>',  
                                ] ); 
                        ?>
                        <div class="menu__body-buttons">
                            <button type="button" class="black-button book-a-call-btn__header">
                                <a class="book-a-call-btn__link" href="#">
                                    <?php the_field('book-a-call-btn__text', 'option'); ?>
                                </a>
                            </button>

                            <button type="button" class="undelined-button contact-us-btn__header">
                                <a class="undelined-button__link contact-us__link" href="#">
                                    <?php the_field('contact-us__text', 'option'); ?>
                                </a>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>   
        </header>
            