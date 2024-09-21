    <footer class="footer">
        <div class="footer__container">
            <div class="footer__only-mobile">
                <h2 class="footer__title"><?php the_field('footer__title', 'option'); ?></h2>
                <form action="" class="footer__form form">
                    <div class="form__body">
                        <div class="form__input">
                            <input type="email" id="email" name="email" class="form__input-field" placeholder="Enter email adress*">
                        </div>
                        <div class="form__subscription-mobile" id="custom_checkbox">
                            <input type="checkbox" id="subscription" name="subscription" value="Yes">
                            <span></span>
                            <label for="subscription" class="form__subscription-mobile-text">
                                <?php the_field('form__subscription-mobile-text', 'option'); ?>
                            </label>
                            <label for="subscription" class="form__subscription-desktop-text">
                                <?php the_field('form__subscription-desktop-text', 'option'); ?>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="form__button"></button>
                </form>
                <div class="footer__social-icons icons">
                    <div class="icon__twitter"></div>
                    <div class="icon__instagram"></div>
                    <div class="icon__mail"></div>
                </div>
                <div class="footer__bottom">
                    <div class="footer__bottom-policy">
                        <p class="footer__bottom-policy-terms"><?php the_field('footer__bottom-policy-terms', 'option'); ?></p>
                        <p class="footer__bottom-policy-privacy"><?php the_field('footer__bottom-policy-privacy', 'option'); ?></p>
                    </div>
                    <div class="footer__bottom-mobile-logo">
                        <?php 
                            $mobile_logo = get_field('mobile_logo', 'option');
                            if( $mobile_logo ) : ?>
                                <img src="<?php echo esc_url($mobile_logo['url']); ?>" alt="<?php echo esc_attr($mobile_logo['alt']); ?>" class="logo-mobile">
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="footer__and-desktop">
                <div class="footer__social-icons icons">
                    <div class="icon__twitter"></div>
                    <div class="icon__instagram"></div>
                    <div class="icon__mail"></div>
                </div>
                <div class="footer__menu">
                    <nav class="footer__menu-body">
                        <?php 
                            wp_nav_menu( [
                                'theme_location'       => 'footer',                          
                                'container'            => false,    
                                'menu_id'              => false,    
                                'echo'                 => true,
                                'depth'                => 0,       
                                'items_wrap'           => '<ul id="%1$s" class="footer__menu-list %2$s">%3$s</ul>',  
                                ] ); 
                        ?>
                    </nav>
                    <div class="footer__bottom-desktop-logo">
                        <?php 
                            $desktop_logo = get_field('desktop_logo', 'option');
                            if( $desktop_logo ) : ?>
                                <img src="<?php echo esc_url($desktop_logo['url']); ?>" alt="<?php echo esc_attr($desktop_logo['alt']); ?>" class="logo-desktop">
                        <?php endif; ?>
                    </div>
                </div>
            </div>  
        </div>
    </footer>

    <?php wp_footer(); ?>
    </div>
</body>

</html>