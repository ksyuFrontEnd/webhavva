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
                <button type="button" class="hero__btn see-plans-btn">
                    <a class="see-plans-btn__link" href="#plans">
                        <?php the_field('see-plans-btn__text'); ?>
                    </a>
                </button>
                <button type="button" class="hero__btn book-a-call-btn">
                    <a class="book-a-call-btn__link" href="#">
                        <?php the_field('book-a-call-btn__text'); ?>
                        <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                        </svg>
                    </a>
                </button>
            </div>
        </div>
    </section>

    <!-- Plans section -->
    <section id="plans" class="plans-section section">
        <div class="container">
            <div class="plans__wrapper">
                <h2 class="plans__title">
                    <?php the_field("plans__title"); ?>
                </h2>

                <div class="plans__bar">
                    <button id="monthly-btn" type="button" class="plan-btn" data-plan="monthly">
                        <?php the_field("monthly_plan__text"); ?>
                    </button>
                    <button id="quarterly-btn" type="button" class="plan-btn" data-plan="quarterly">
                        <?php the_field("quarterly_plan__text"); ?>
                    </button>
                    <button id="annual-btn" type="button" class="plan-btn" data-plan="annual">
                        <?php the_field("annual_plan__text"); ?>
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
                                            <div class="swiper-slide plans__card">
                                                <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                <h3><?php the_sub_field('card_price'); ?></h3>
                                                <p><?php the_sub_field('card_purpose'); ?></p>

                                                <button type="button" class="card__btn get-started-btn">
                                                    <a class="get-started-btn__link" href="#">
                                                        <?php the_field('get-started-btn__text'); ?>
                                                        <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                                                        </svg>
                                                    </a>
                                                </button>

                                                <!-- List of services -->
                                                <ul class="service-list">
                                                    <?php if( have_rows('services') ): ?>
                                                        <?php while( have_rows('services') ): the_row(); ?>
                                                            <?php 
                                                                $is_available = get_sub_field('service_available');
                                                            ?>
                                                            <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                                <div class="service-icon">
                                                                    <?php if( $is_available ): ?>
                                                                        <!-- Icon for available service -->
                                                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.67601 4.33517H5.66473L7.08689 2.91302C7.33151 2.66839 7.33151 2.27106 7.08689 2.02643C6.84226 1.78181 6.44493 1.78181 6.2003 2.02643L4.77815 3.44859V1.43731C4.77815 1.09136 4.49734 0.810547 4.15139 0.810547C3.80544 0.810547 3.52463 1.09136 3.52463 1.43731V3.44859L2.10247 2.02643C1.85785 1.78181 1.46051 1.78181 1.21589 2.02643C0.971262 2.27106 0.971262 2.66839 1.21589 2.91302L2.63804 4.33517H0.626759C0.28081 4.33517 0 4.61598 0 4.96193C0 5.30788 0.28081 5.5887 0.626759 5.5887H2.63804L1.21589 7.01085C0.971262 7.25547 0.971262 7.65281 1.21589 7.89743C1.46051 8.14206 1.85785 8.14206 2.10247 7.89743L3.52463 6.47528V8.48656C3.52463 8.83251 3.80544 9.11332 4.15139 9.11332C4.49734 9.11332 4.77815 8.83251 4.77815 8.48656V6.47528L6.2003 7.89743C6.44493 8.14206 6.84226 8.14206 7.08689 7.89743C7.33151 7.65281 7.33151 7.25547 7.08689 7.01085L5.66473 5.5887H7.67601C8.02196 5.5887 8.30277 5.30788 8.30277 4.96193C8.30277 4.61598 8.02196 4.33517 7.67601 4.33517ZM5.1241 4.96193C5.1241 5.49967 4.6884 5.93537 4.15066 5.93537C3.61292 5.93537 3.17723 5.49967 3.17723 4.96193C3.17723 4.42419 3.61292 3.9885 4.15066 3.9885C4.6884 3.9885 5.1241 4.42419 5.1241 4.96193Z" fill="#F74421" />
                                                                        </svg>
                                                                    <?php else: ?>
                                                                        <!-- Icon for unavailable service -->
                                                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.33189 6.15172L5.40886 4.17769C5.2272 3.99206 5.2272 3.69324 5.40886 3.50761L7.15022 1.71921C7.41165 1.45208 7.42937 1.0129 7.17238 0.741249C6.91095 0.465065 6.48115 0.460538 6.21973 0.732194L4.46507 2.5387C4.28341 2.72434 3.99096 2.72434 3.8093 2.5387L2.06794 0.750304C1.81094 0.483176 1.38557 0.465065 1.11972 0.723138C0.84943 0.990267 0.84943 1.42944 1.11085 1.7011L2.86551 3.50308C3.04717 3.68871 3.04717 3.99206 2.86551 4.17317L0.955772 6.13814C0.694347 6.40527 0.676623 6.84445 0.933617 7.1161C1.19061 7.38776 1.62484 7.39681 1.88627 7.12516L3.8093 5.1466C3.99096 4.96097 4.28341 4.96097 4.46507 5.1466L6.3881 7.12063C6.64953 7.38776 7.07047 7.38776 7.33189 7.12063C7.63319 6.82181 7.59332 6.42338 7.33189 6.15172Z" fill="#8A8A8A" />
                                                                        </svg>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <p><?php the_sub_field('service_name'); ?></p>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>

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
                                            <div class="swiper-slide plans__card">
                                                <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                                <h3><?php the_sub_field('card_price'); ?></h3>
                                                <p><?php the_sub_field('card_purpose'); ?></p>

                                                <button type="button" class="card__btn get-started-btn">
                                                    <a class="get-started-btn__link" href="#">
                                                        <?php the_field('get-started-btn__text'); ?>
                                                        <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                                                        </svg>
                                                    </a>
                                                </button>

                                                <!-- List of services -->
                                                <ul class="service-list">
                                                    <?php if( have_rows('services') ): ?>
                                                        <?php while( have_rows('services') ): the_row(); ?>
                                                            <?php 
                                                                $is_available = get_sub_field('service_available');
                                                            ?>
                                                            <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                                <div class="service-icon">
                                                                    <?php if( $is_available ): ?>
                                                                        <!-- Icon for available service -->
                                                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.67601 4.33517H5.66473L7.08689 2.91302C7.33151 2.66839 7.33151 2.27106 7.08689 2.02643C6.84226 1.78181 6.44493 1.78181 6.2003 2.02643L4.77815 3.44859V1.43731C4.77815 1.09136 4.49734 0.810547 4.15139 0.810547C3.80544 0.810547 3.52463 1.09136 3.52463 1.43731V3.44859L2.10247 2.02643C1.85785 1.78181 1.46051 1.78181 1.21589 2.02643C0.971262 2.27106 0.971262 2.66839 1.21589 2.91302L2.63804 4.33517H0.626759C0.28081 4.33517 0 4.61598 0 4.96193C0 5.30788 0.28081 5.5887 0.626759 5.5887H2.63804L1.21589 7.01085C0.971262 7.25547 0.971262 7.65281 1.21589 7.89743C1.46051 8.14206 1.85785 8.14206 2.10247 7.89743L3.52463 6.47528V8.48656C3.52463 8.83251 3.80544 9.11332 4.15139 9.11332C4.49734 9.11332 4.77815 8.83251 4.77815 8.48656V6.47528L6.2003 7.89743C6.44493 8.14206 6.84226 8.14206 7.08689 7.89743C7.33151 7.65281 7.33151 7.25547 7.08689 7.01085L5.66473 5.5887H7.67601C8.02196 5.5887 8.30277 5.30788 8.30277 4.96193C8.30277 4.61598 8.02196 4.33517 7.67601 4.33517ZM5.1241 4.96193C5.1241 5.49967 4.6884 5.93537 4.15066 5.93537C3.61292 5.93537 3.17723 5.49967 3.17723 4.96193C3.17723 4.42419 3.61292 3.9885 4.15066 3.9885C4.6884 3.9885 5.1241 4.42419 5.1241 4.96193Z" fill="#F74421" />
                                                                        </svg>
                                                                    <?php else: ?>
                                                                        <!-- Icon for unavailable service -->
                                                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.33189 6.15172L5.40886 4.17769C5.2272 3.99206 5.2272 3.69324 5.40886 3.50761L7.15022 1.71921C7.41165 1.45208 7.42937 1.0129 7.17238 0.741249C6.91095 0.465065 6.48115 0.460538 6.21973 0.732194L4.46507 2.5387C4.28341 2.72434 3.99096 2.72434 3.8093 2.5387L2.06794 0.750304C1.81094 0.483176 1.38557 0.465065 1.11972 0.723138C0.84943 0.990267 0.84943 1.42944 1.11085 1.7011L2.86551 3.50308C3.04717 3.68871 3.04717 3.99206 2.86551 4.17317L0.955772 6.13814C0.694347 6.40527 0.676623 6.84445 0.933617 7.1161C1.19061 7.38776 1.62484 7.39681 1.88627 7.12516L3.8093 5.1466C3.99096 4.96097 4.28341 4.96097 4.46507 5.1466L6.3881 7.12063C6.64953 7.38776 7.07047 7.38776 7.33189 7.12063C7.63319 6.82181 7.59332 6.42338 7.33189 6.15172Z" fill="#8A8A8A" />
                                                                        </svg>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <p><?php the_sub_field('service_name'); ?></p>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
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
                                        <div class="swiper-slide plans__card">
                                            <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                            <h3><?php the_sub_field('card_price'); ?></h3>
                                            <p><?php the_sub_field('card_purpose'); ?></p>

                                            <button type="button" class="card__btn get-started-btn">
                                                <a class="get-started-btn__link" href="#">
                                                    <?php the_field('get-started-btn__text'); ?>
                                                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                                                    </svg>
                                                </a>
                                            </button>

                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <div class="service-icon">
                                                                <?php if( $is_available ): ?>
                                                                    <!-- Icon for available service -->
                                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.67601 4.33517H5.66473L7.08689 2.91302C7.33151 2.66839 7.33151 2.27106 7.08689 2.02643C6.84226 1.78181 6.44493 1.78181 6.2003 2.02643L4.77815 3.44859V1.43731C4.77815 1.09136 4.49734 0.810547 4.15139 0.810547C3.80544 0.810547 3.52463 1.09136 3.52463 1.43731V3.44859L2.10247 2.02643C1.85785 1.78181 1.46051 1.78181 1.21589 2.02643C0.971262 2.27106 0.971262 2.66839 1.21589 2.91302L2.63804 4.33517H0.626759C0.28081 4.33517 0 4.61598 0 4.96193C0 5.30788 0.28081 5.5887 0.626759 5.5887H2.63804L1.21589 7.01085C0.971262 7.25547 0.971262 7.65281 1.21589 7.89743C1.46051 8.14206 1.85785 8.14206 2.10247 7.89743L3.52463 6.47528V8.48656C3.52463 8.83251 3.80544 9.11332 4.15139 9.11332C4.49734 9.11332 4.77815 8.83251 4.77815 8.48656V6.47528L6.2003 7.89743C6.44493 8.14206 6.84226 8.14206 7.08689 7.89743C7.33151 7.65281 7.33151 7.25547 7.08689 7.01085L5.66473 5.5887H7.67601C8.02196 5.5887 8.30277 5.30788 8.30277 4.96193C8.30277 4.61598 8.02196 4.33517 7.67601 4.33517ZM5.1241 4.96193C5.1241 5.49967 4.6884 5.93537 4.15066 5.93537C3.61292 5.93537 3.17723 5.49967 3.17723 4.96193C3.17723 4.42419 3.61292 3.9885 4.15066 3.9885C4.6884 3.9885 5.1241 4.42419 5.1241 4.96193Z" fill="#F74421" />
                                                                    </svg>
                                                                <?php else: ?>
                                                                    <!-- Icon for unavailable service -->
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.33189 6.15172L5.40886 4.17769C5.2272 3.99206 5.2272 3.69324 5.40886 3.50761L7.15022 1.71921C7.41165 1.45208 7.42937 1.0129 7.17238 0.741249C6.91095 0.465065 6.48115 0.460538 6.21973 0.732194L4.46507 2.5387C4.28341 2.72434 3.99096 2.72434 3.8093 2.5387L2.06794 0.750304C1.81094 0.483176 1.38557 0.465065 1.11972 0.723138C0.84943 0.990267 0.84943 1.42944 1.11085 1.7011L2.86551 3.50308C3.04717 3.68871 3.04717 3.99206 2.86551 4.17317L0.955772 6.13814C0.694347 6.40527 0.676623 6.84445 0.933617 7.1161C1.19061 7.38776 1.62484 7.39681 1.88627 7.12516L3.8093 5.1466C3.99096 4.96097 4.28341 4.96097 4.46507 5.1466L6.3881 7.12063C6.64953 7.38776 7.07047 7.38776 7.33189 7.12063C7.63319 6.82181 7.59332 6.42338 7.33189 6.15172Z" fill="#8A8A8A" />
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
                                                            <p><?php the_sub_field('service_name'); ?></p>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
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
                                            <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                            <h3><?php the_sub_field('card_price'); ?></h3>
                                            <p><?php the_sub_field('card_purpose'); ?></p>

                                            <button type="button" class="card__btn get-started-btn">
                                                <a class="get-started-btn__link" href="#">
                                                    <?php the_field('get-started-btn__text'); ?>
                                                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                                                    </svg>
                                                </a>
                                            </button>

                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <div class="service-icon">
                                                                <?php if( $is_available ): ?>
                                                                    <!-- Icon for available service -->
                                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.67601 4.33517H5.66473L7.08689 2.91302C7.33151 2.66839 7.33151 2.27106 7.08689 2.02643C6.84226 1.78181 6.44493 1.78181 6.2003 2.02643L4.77815 3.44859V1.43731C4.77815 1.09136 4.49734 0.810547 4.15139 0.810547C3.80544 0.810547 3.52463 1.09136 3.52463 1.43731V3.44859L2.10247 2.02643C1.85785 1.78181 1.46051 1.78181 1.21589 2.02643C0.971262 2.27106 0.971262 2.66839 1.21589 2.91302L2.63804 4.33517H0.626759C0.28081 4.33517 0 4.61598 0 4.96193C0 5.30788 0.28081 5.5887 0.626759 5.5887H2.63804L1.21589 7.01085C0.971262 7.25547 0.971262 7.65281 1.21589 7.89743C1.46051 8.14206 1.85785 8.14206 2.10247 7.89743L3.52463 6.47528V8.48656C3.52463 8.83251 3.80544 9.11332 4.15139 9.11332C4.49734 9.11332 4.77815 8.83251 4.77815 8.48656V6.47528L6.2003 7.89743C6.44493 8.14206 6.84226 8.14206 7.08689 7.89743C7.33151 7.65281 7.33151 7.25547 7.08689 7.01085L5.66473 5.5887H7.67601C8.02196 5.5887 8.30277 5.30788 8.30277 4.96193C8.30277 4.61598 8.02196 4.33517 7.67601 4.33517ZM5.1241 4.96193C5.1241 5.49967 4.6884 5.93537 4.15066 5.93537C3.61292 5.93537 3.17723 5.49967 3.17723 4.96193C3.17723 4.42419 3.61292 3.9885 4.15066 3.9885C4.6884 3.9885 5.1241 4.42419 5.1241 4.96193Z" fill="#F74421" />
                                                                    </svg>
                                                                <?php else: ?>
                                                                    <!-- Icon for unavailable service -->
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.33189 6.15172L5.40886 4.17769C5.2272 3.99206 5.2272 3.69324 5.40886 3.50761L7.15022 1.71921C7.41165 1.45208 7.42937 1.0129 7.17238 0.741249C6.91095 0.465065 6.48115 0.460538 6.21973 0.732194L4.46507 2.5387C4.28341 2.72434 3.99096 2.72434 3.8093 2.5387L2.06794 0.750304C1.81094 0.483176 1.38557 0.465065 1.11972 0.723138C0.84943 0.990267 0.84943 1.42944 1.11085 1.7011L2.86551 3.50308C3.04717 3.68871 3.04717 3.99206 2.86551 4.17317L0.955772 6.13814C0.694347 6.40527 0.676623 6.84445 0.933617 7.1161C1.19061 7.38776 1.62484 7.39681 1.88627 7.12516L3.8093 5.1466C3.99096 4.96097 4.28341 4.96097 4.46507 5.1466L6.3881 7.12063C6.64953 7.38776 7.07047 7.38776 7.33189 7.12063C7.63319 6.82181 7.59332 6.42338 7.33189 6.15172Z" fill="#8A8A8A" />
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
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
                                            <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                            <h3><?php the_sub_field('card_price'); ?></h3>
                                            <p><?php the_sub_field('card_purpose'); ?></p>

                                            <button type="button" class="card__btn get-started-btn">
                                                <a class="get-started-btn__link" href="#">
                                                    <?php the_field('get-started-btn__text'); ?>
                                                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                                                    </svg>
                                                </a>
                                            </button>

                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <div class="service-icon">
                                                                <?php if( $is_available ): ?>
                                                                    <!-- Icon for available service -->
                                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.67601 4.33517H5.66473L7.08689 2.91302C7.33151 2.66839 7.33151 2.27106 7.08689 2.02643C6.84226 1.78181 6.44493 1.78181 6.2003 2.02643L4.77815 3.44859V1.43731C4.77815 1.09136 4.49734 0.810547 4.15139 0.810547C3.80544 0.810547 3.52463 1.09136 3.52463 1.43731V3.44859L2.10247 2.02643C1.85785 1.78181 1.46051 1.78181 1.21589 2.02643C0.971262 2.27106 0.971262 2.66839 1.21589 2.91302L2.63804 4.33517H0.626759C0.28081 4.33517 0 4.61598 0 4.96193C0 5.30788 0.28081 5.5887 0.626759 5.5887H2.63804L1.21589 7.01085C0.971262 7.25547 0.971262 7.65281 1.21589 7.89743C1.46051 8.14206 1.85785 8.14206 2.10247 7.89743L3.52463 6.47528V8.48656C3.52463 8.83251 3.80544 9.11332 4.15139 9.11332C4.49734 9.11332 4.77815 8.83251 4.77815 8.48656V6.47528L6.2003 7.89743C6.44493 8.14206 6.84226 8.14206 7.08689 7.89743C7.33151 7.65281 7.33151 7.25547 7.08689 7.01085L5.66473 5.5887H7.67601C8.02196 5.5887 8.30277 5.30788 8.30277 4.96193C8.30277 4.61598 8.02196 4.33517 7.67601 4.33517ZM5.1241 4.96193C5.1241 5.49967 4.6884 5.93537 4.15066 5.93537C3.61292 5.93537 3.17723 5.49967 3.17723 4.96193C3.17723 4.42419 3.61292 3.9885 4.15066 3.9885C4.6884 3.9885 5.1241 4.42419 5.1241 4.96193Z" fill="#F74421" />
                                                                    </svg>
                                                                <?php else: ?>
                                                                    <!-- Icon for unavailable service -->
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.33189 6.15172L5.40886 4.17769C5.2272 3.99206 5.2272 3.69324 5.40886 3.50761L7.15022 1.71921C7.41165 1.45208 7.42937 1.0129 7.17238 0.741249C6.91095 0.465065 6.48115 0.460538 6.21973 0.732194L4.46507 2.5387C4.28341 2.72434 3.99096 2.72434 3.8093 2.5387L2.06794 0.750304C1.81094 0.483176 1.38557 0.465065 1.11972 0.723138C0.84943 0.990267 0.84943 1.42944 1.11085 1.7011L2.86551 3.50308C3.04717 3.68871 3.04717 3.99206 2.86551 4.17317L0.955772 6.13814C0.694347 6.40527 0.676623 6.84445 0.933617 7.1161C1.19061 7.38776 1.62484 7.39681 1.88627 7.12516L3.8093 5.1466C3.99096 4.96097 4.28341 4.96097 4.46507 5.1466L6.3881 7.12063C6.64953 7.38776 7.07047 7.38776 7.33189 7.12063C7.63319 6.82181 7.59332 6.42338 7.33189 6.15172Z" fill="#8A8A8A" />
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
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
                                            <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                            <h3><?php the_sub_field('card_price'); ?></h3>
                                            <p><?php the_sub_field('card_purpose'); ?></p>

                                            <button type="button" class="card__btn get-started-btn">
                                                <a class="get-started-btn__link" href="#">
                                                    <?php the_field('get-started-btn__text'); ?>
                                                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1854 4.83012C11.3807 4.63485 11.3807 4.31827 11.1854 4.12301L8.00342 0.941028C7.80816 0.745766 7.49157 0.745766 7.29631 0.941028C7.10105 1.13629 7.10105 1.45287 7.29631 1.64813L10.1247 4.47656L7.29631 7.30499C7.10105 7.50025 7.10105 7.81683 7.29631 8.0121C7.49157 8.20736 7.80816 8.20736 8.00342 8.0121L11.1854 4.83012ZM0.09375 4.97656L10.8318 4.97656L10.8318 3.97656L0.09375 3.97656L0.09375 4.97656Z" fill="#181818" />
                                                    </svg>
                                                </a>
                                            </button>

                                            <!-- List of services -->
                                            <ul class="service-list">
                                                <?php if( have_rows('services') ): ?>
                                                    <?php while( have_rows('services') ): the_row(); ?>
                                                        <?php 
                                                            $is_available = get_sub_field('service_available');
                                                        ?>
                                                        <li class="service-item <?php echo $is_available ? '' : 'unavailable'; ?>">
                                                            <div class="service-icon">
                                                                <?php if( $is_available ): ?>
                                                                    <!-- Icon for available service -->
                                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.67601 4.33517H5.66473L7.08689 2.91302C7.33151 2.66839 7.33151 2.27106 7.08689 2.02643C6.84226 1.78181 6.44493 1.78181 6.2003 2.02643L4.77815 3.44859V1.43731C4.77815 1.09136 4.49734 0.810547 4.15139 0.810547C3.80544 0.810547 3.52463 1.09136 3.52463 1.43731V3.44859L2.10247 2.02643C1.85785 1.78181 1.46051 1.78181 1.21589 2.02643C0.971262 2.27106 0.971262 2.66839 1.21589 2.91302L2.63804 4.33517H0.626759C0.28081 4.33517 0 4.61598 0 4.96193C0 5.30788 0.28081 5.5887 0.626759 5.5887H2.63804L1.21589 7.01085C0.971262 7.25547 0.971262 7.65281 1.21589 7.89743C1.46051 8.14206 1.85785 8.14206 2.10247 7.89743L3.52463 6.47528V8.48656C3.52463 8.83251 3.80544 9.11332 4.15139 9.11332C4.49734 9.11332 4.77815 8.83251 4.77815 8.48656V6.47528L6.2003 7.89743C6.44493 8.14206 6.84226 8.14206 7.08689 7.89743C7.33151 7.65281 7.33151 7.25547 7.08689 7.01085L5.66473 5.5887H7.67601C8.02196 5.5887 8.30277 5.30788 8.30277 4.96193C8.30277 4.61598 8.02196 4.33517 7.67601 4.33517ZM5.1241 4.96193C5.1241 5.49967 4.6884 5.93537 4.15066 5.93537C3.61292 5.93537 3.17723 5.49967 3.17723 4.96193C3.17723 4.42419 3.61292 3.9885 4.15066 3.9885C4.6884 3.9885 5.1241 4.42419 5.1241 4.96193Z" fill="#F74421" />
                                                                    </svg>
                                                                <?php else: ?>
                                                                    <!-- Icon for unavailable service -->
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.33189 6.15172L5.40886 4.17769C5.2272 3.99206 5.2272 3.69324 5.40886 3.50761L7.15022 1.71921C7.41165 1.45208 7.42937 1.0129 7.17238 0.741249C6.91095 0.465065 6.48115 0.460538 6.21973 0.732194L4.46507 2.5387C4.28341 2.72434 3.99096 2.72434 3.8093 2.5387L2.06794 0.750304C1.81094 0.483176 1.38557 0.465065 1.11972 0.723138C0.84943 0.990267 0.84943 1.42944 1.11085 1.7011L2.86551 3.50308C3.04717 3.68871 3.04717 3.99206 2.86551 4.17317L0.955772 6.13814C0.694347 6.40527 0.676623 6.84445 0.933617 7.1161C1.19061 7.38776 1.62484 7.39681 1.88627 7.12516L3.8093 5.1466C3.99096 4.96097 4.28341 4.96097 4.46507 5.1466L6.3881 7.12063C6.64953 7.38776 7.07047 7.38776 7.33189 7.12063C7.63319 6.82181 7.59332 6.42338 7.33189 6.15172Z" fill="#8A8A8A" />
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
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

                    </div>
                    
                </div>
                
                <!-- <div class="plans__cards-enterprise">enterprise</div> -->
            
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>