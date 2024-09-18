<?php
/*
Template Name: page-landing
*/
get_header();

?>

<main class="landing">

    <!-- Hero section -->
    <section id="hero" class="hero-section section">
        <div class="container">
            <div class="hero__wrapper">
                <h1 class="hero__title">
                    <?php the_field("hero__title"); ?>
                </h1>
                <p class="hero__description">
                    <?php the_field("hero__description"); ?>
                </p>
                <button type="button" class="hero__btn orange-button see-plans-btn">
                    <a class="see-plans-btn__link" href="#plans">
                        <?php the_field('see-plans-btn__text', 'option'); ?>
                    </a>
                </button>
                <button type="button" class="undelined-button hero__btn book-a-call-btn">
                    <a class="undelined-button__link book-a-call-btn__link" href="#">
                    <?php the_field('book-a-call-btn__text', 'option'); ?>
                    </a>
                </button>
            </div>
        </div>
    </section>

    <!-- Plans section -->
    <section id="plans" class="plans-section section">
        <div class="container">
            <div class="plans__wrapper">
                <div class="plans__upper">
                    <div class="plans__section-number">
                        <p>05</p>
                    </div>
                    <div class="plans__section-title">
                        <p>Plans</p>
                    </div>
                    <h2 class="plans__title">
                        <?php the_field("plans__title"); ?>
                    </h2>
                </div>
                
                <div class="plans__bar">
                    <button id="monthly-btn" type="button" class="plan-btn" data-plan="monthly">
                        <?php the_field("monthly_plan__text"); ?>
                    </button>
                    <button id="quarterly-btn" type="button" class="plan-btn" data-plan="quarterly">
                        <p><?php the_field("quarterly_plan__text"); ?></p>
                        <div class="plan-btn__discount">
                            <?php the_field("quarterly_plan__discount"); ?>
                        </div>
                    </button>
                    <button id="annual-btn" type="button" class="plan-btn" data-plan="annual">
                        <?php the_field("annual_plan__text"); ?>
                        <div class="plan-btn__discount">
                            <?php the_field("annual_plan__discount"); ?>
                        </div>
                        
                    </button>
                </div>

                
                <div class="plans__container">

                    <!-- Mobile -->
                    <div class="plans__types-mobile">

                        <!-- Monthly mobile -->
                        <div id="monthly-mobile" class="plan-content monthly-plan">
                            <?php if( have_rows('plans__cards_monthly') ): ?>
                                <div class="swiper-plans">
                                    <div class="swiper-wrapper">
                                        <?php while( have_rows('plans__cards_monthly') ): the_row(); ?>
                                            <div class="swiper-slide">
                                                <div class="plans__card">
                                                    <div class="card-info">
                                                        <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                        <div class="card-price">
                                                            <?php if (get_sub_field('card-price__old_value')) : ?>
                                                                <div class="card-price__old-value">
                                                                    <?php the_sub_field('card-price__old_value'); ?>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="card-price__actual_value">
                                                                <span class="card-price__currency"><?php the_sub_field('card-price__currency'); ?></span>
                                                                <span class="card-price__value"><?php the_sub_field('card-price__value'); ?></span>
                                                                <span class="card-price__frequency"><?php the_sub_field('card-price__frequency'); ?></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <p class="card-purpose"><?php the_sub_field('card_purpose'); ?></p>

                                                        <button type="button" class="card__btn orange-button get-started-btn">
                                                            <a class="card__btn-link get-started-btn__link" href="#">
                                                                <?php the_field('get-started-btn__text', 'option'); ?>
                                                            </a>
                                                        </button>
                                                    </div>
                                                    <!-- List of services -->
                                                    <ul class="service-list">
                                                        <?php if( have_rows('services') ): ?>
                                                            <?php while( have_rows('services') ): the_row(); ?>
                                                                <?php 
                                                                    $is_available = get_sub_field('service_available');
                                                                ?>
                                                                <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                                    <p><?php the_sub_field('service_name'); ?></p>
                                                                </li>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>

                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Quarterly mobile -->
                        <div id="quarterly-mobile" class="plan-content quarterly-plan">
                            <?php if( have_rows('plans__cards_quarterly') ): ?>
                                <div class="swiper-plans">
                                    <div class="swiper-wrapper">
                                        <?php while( have_rows('plans__cards_quarterly') ): the_row(); ?>
                                            <div class="swiper-slide">
                                                <div class="plans__card">
                                                    <div class="card-info">
                                                        <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                        <div class="card-price">
                                                            <?php if (get_sub_field('card-price__old_value')) : ?>
                                                                <div class="card-price__old-value">
                                                                    <?php the_sub_field('card-price__old_value'); ?>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="card-price__actual_value">
                                                                <span class="card-price__currency"><?php the_sub_field('card-price__currency'); ?></span>
                                                                <span class="card-price__value"><?php the_sub_field('card-price__value'); ?></span>
                                                                <span class="card-price__frequency"><?php the_sub_field('card-price__frequency'); ?></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <p class="card-purpose"><?php the_sub_field('card_purpose'); ?></p>

                                                        <button type="button" class="card__btn orange-button get-started-btn">
                                                            <a class="card__btn-link get-started-btn__link" href="#">
                                                                <?php the_field('get-started-btn__text', 'option'); ?>
                                                            </a>
                                                        </button>
                                                    </div>
                                                    <!-- List of services -->
                                                    <ul class="service-list">
                                                        <?php if( have_rows('services') ): ?>
                                                            <?php while( have_rows('services') ): the_row(); ?>
                                                                <?php 
                                                                    $is_available = get_sub_field('service_available');
                                                                ?>
                                                                <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                                    <p><?php the_sub_field('service_name'); ?></p>
                                                                </li>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Annual mobile -->
                        <div id="annual-mobile" class="plan-content annual-plan">   
                            <?php if( have_rows('plans__cards_annual') ): ?>
                            <div class="swiper-plans">
                                <div class="swiper-wrapper">
                                    <?php while( have_rows('plans__cards_annual') ): the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="plans__card">
                                                <div class="card-info">
                                                    <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                    <div class="card-price">
                                                        <?php if (get_sub_field('card-price__old_value')) : ?>
                                                            <div class="card-price__old-value">
                                                                <?php the_sub_field('card-price__old_value'); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="card-price__actual_value">
                                                            <span class="card-price__currency"><?php the_sub_field('card-price__currency'); ?></span>
                                                            <span class="card-price__value"><?php the_sub_field('card-price__value'); ?></span>
                                                            <span class="card-price__frequency"><?php the_sub_field('card-price__frequency'); ?></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="card-purpose"><?php the_sub_field('card_purpose'); ?></p>

                                                    <button type="button" class="card__btn orange-button get-started-btn">
                                                        <a class="card__btn-link get-started-btn__link" href="#">
                                                            <?php the_field('get-started-btn__text', 'option'); ?>
                                                        </a>
                                                    </button>
                                                </div>
                                                <!-- List of services -->
                                                <ul class="service-list">
                                                    <?php if( have_rows('services') ): ?>
                                                        <?php while( have_rows('services') ): the_row(); ?>
                                                            <?php 
                                                                $is_available = get_sub_field('service_available');
                                                            ?>
                                                            <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                                <p><?php the_sub_field('service_name'); ?></p>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div> 
                            </div>
                            <?php endif; ?>
                        </div>

                    </div>
                    
                    <!-- Desktop -->
                    <div class="plans__types-desktop">

                        <!-- Monthly -->
                        <div id="monthly-desktop" class="plan-content monthly-plan">
                            <?php if( have_rows('plans__cards_monthly') ): ?>
                                <div class="plans__cards-desktop plans__cards-desktop__monthly">
                                    <?php while( have_rows('plans__cards_monthly') ): the_row(); ?>
                                        <div class="plans__card">
                                            <div class="card-info">
                                                <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                <div class="card-price">
                                                    <?php if (get_sub_field('card-price__old_value')) : ?>
                                                        <div class="card-price__old-value">
                                                            <?php the_sub_field('card-price__old_value'); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="card-price__actual_value">
                                                        <span class="card-price__currency"><?php the_sub_field('card-price__currency'); ?></span>
                                                        <span class="card-price__value"><?php the_sub_field('card-price__value'); ?></span>
                                                        <span class="card-price__frequency"><?php the_sub_field('card-price__frequency'); ?></span>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-purpose"><?php the_sub_field('card_purpose'); ?></p>

                                                <button type="button" class="card__btn orange-button get-started-btn">
                                                    <a class="card__btn-link get-started-btn__link" href="#">
                                                        <?php the_field('get-started-btn__text', 'option'); ?>
                                                    </a>
                                                </button>
                                            </div>
                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <p><?php the_sub_field('service_name'); ?></p>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                    
                                </div>
                            <?php endif; ?>
                        </div>
                            
                        <!-- Quarterly -->
                        <div id="quarterly-desktop" class="plan-content quarterly-plan">
                            <?php if( have_rows('plans__cards_quarterly') ): ?>
                                <div class="plans__cards-desktop plans__cards-desktop__quarterly">
                                    <?php while( have_rows('plans__cards_quarterly') ): the_row(); ?>
                                        <div class="plans__card">
                                            <div class="card-info">
                                                <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                <div class="card-price">
                                                    <?php if (get_sub_field('card-price__old_value')) : ?>
                                                        <div class="card-price__old-value">
                                                            <?php the_sub_field('card-price__old_value'); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="card-price__actual_value">
                                                        <span class="card-price__currency"><?php the_sub_field('card-price__currency'); ?></span>
                                                        <span class="card-price__value"><?php the_sub_field('card-price__value'); ?></span>
                                                        <span class="card-price__frequency"><?php the_sub_field('card-price__frequency'); ?></span>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-purpose"><?php the_sub_field('card_purpose'); ?></p>

                                                <button type="button" class="card__btn orange-button get-started-btn">
                                                    <a class="card__btn-link get-started-btn__link" href="#">
                                                        <?php the_field('get-started-btn__text', 'option'); ?>
                                                    </a>
                                                </button>
                                            </div>
                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <p><?php the_sub_field('service_name'); ?></p>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Annual -->
                        <div id="annual-desktop" class="plan-content annual-plan">
                            <?php if( have_rows('plans__cards_annual') ): ?>
                                <div class="plans__cards-desktop plans__cards-desktop__annual">
                                    <?php while( have_rows('plans__cards_annual') ): the_row(); ?>
                                        <div class="plans__card">
                                            <div class="card-info">
                                                <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                <div class="card-price">
                                                    <?php if (get_sub_field('card-price__old_value')) : ?>
                                                        <div class="card-price__old-value">
                                                            <?php the_sub_field('card-price__old_value'); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="card-price__actual_value">
                                                        <span class="card-price__currency"><?php the_sub_field('card-price__currency'); ?></span>
                                                        <span class="card-price__value"><?php the_sub_field('card-price__value'); ?></span>
                                                        <span class="card-price__frequency"><?php the_sub_field('card-price__frequency'); ?></span>
                                                    </div>
                                                </div>
                                                
                                                <p class="card-purpose"><?php the_sub_field('card_purpose'); ?></p>

                                                <button type="button" class="card__btn orange-button get-started-btn">
                                                    <a class="card__btn-link get-started-btn__link" href="#">
                                                        <?php the_field('get-started-btn__text', 'option'); ?>
                                                    </a>
                                                </button>
                                            </div>
                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <p><?php the_sub_field('service_name'); ?></p>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Enterprise for desktop -->
                        <div class="plans__cards-enterprise plans__cards-enterprise__desktop">
                            <h3 class="card-title"><?php the_field('card_title_enterprise'); ?></h3>
                            <p class="card-question"><?php the_field('card_question_enterprise'); ?></p>
                            <p class="card-answer"><?php the_field('card_answer_enterprise'); ?></p>
                            <button type="button" class="card__btn orange-button lets-talk-btn">
                                <a class="card__btn-link lets-talk-btn__link" href="#">
                                    <?php the_field('lets-talk-btn__text', 'option'); ?>
                                </a>
                            </button>
                        </div>

                    </div>
                    
                </div>
                <!-- Enterprise for mobile -->
                <div class="plans__cards-enterprise plans__cards-enterprise__mobile">
                    <h3 class="card-title"><?php the_field('card_title_enterprise'); ?></h3>
                    <p class="card-question"><?php the_field('card_question_enterprise'); ?></p>
                    <p class="card-answer"><?php the_field('card_answer_enterprise'); ?></p>
                    <button type="button" class="card__btn orange-button lets-talk-btn">
                        <a class="card__btn-link lets-talk-btn__link" href="#">
                            <?php the_field('lets-talk-btn__text', 'option'); ?>
                        </a>
                    </button>
                </div>
        
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>