   <?php get_header() ?>
   <div class="promo container">
       <?php if (get_theme_mod('intro_title_text')) : ?>
           <span class="promo-suptitle" id="promo-suptitle"><?php echo get_theme_mod('intro_title_text') ?></span>
       <?php endif ?>
       <?php if (get_theme_mod('intro_bg_title_text')) : ?>
           <h1 class="promo-title" id="promo-title"><?php echo get_theme_mod('intro_bg_title_text') ?></h1>
       <?php endif ?>

   </div>
   <div class="promo-block wrapper" style="background-image:url('<?php echo get_theme_mod('intro_bg_img', 'default') ?>')">
       <div class="promo-block__desc container" id="intro-btn">
           <button class="btn promo-btn" style="background-color: <?php echo get_theme_mod('intro_button_bg_color', 'default') ?>"><?php echo get_theme_mod('intro_button_txt', 'default') ?></button>
           <span id="btn-txt">
               <!-- for WP cuspomizer pen -->
           </span>
       </div>
   </div>
   </div>

   <?php if (get_theme_mod('offer_show') == 'show') : ?>
       <section class="container offer" id="offer">
           <?php if (get_theme_mod('offer_header_txt')) : ?>
               <h2 class="section__title offer"><?php echo get_theme_mod('offer_header_txt') ?></h2>
           <?php endif ?>
           <?php if (get_theme_mod('offer_desc')) : ?>
               <p class="offer__desc">
                   <?php echo get_theme_mod('offer_desc') ?>
               </p>
           <?php endif ?>
           <?php
            //global $post;
            $offers = get_posts([
                'post_type' => 'offer',
                'numberposts' => 3,
                'order' => 'asc',
            ]);
            ?>
           <?php if ($offers) : ?>
               <ul class="offer-ul">
                   <?php foreach ($offers as $offer) :
                        $post = $offer;
                        setup_postdata($offer);
                    ?>
                       <li class="offer__list">
                           <?php the_post_thumbnail('full', ['class' => 'offer__img']) ?>
                           <span class="offer__suptitle"><?php the_excerpt() ?></span>
                           <h3 class="offer__title"><?php the_title() ?></h3>
                           <button class="btn offer__btn"><?php echo get_post_meta($id, 'offer_price', true); ?></button>
                       </li>
                   <?php

                    endforeach;
                    wp_reset_postdata(); ?>
               </ul>
           <?php endif ?>
       </section>
   <?php endif ?>
   <?php
    $galleryes = get_post_gallery_images(67);
    if ($galleryes) : ?>
       <section class="gallery" id="gallery">
           <h2 class="section__title"><?php esc_html_e('Gallery', 'ski') ?></h2>
           <div class="sgrid">
               <ul class="gallery-list grid">
                   <?php
                    foreach ($galleryes as $gallery) :
                    ?>
                       <li class="gallery__item grid-item"><a href="<?php echo $gallery ?>"><img src="<?php echo $gallery ?>" alt="gallery" class="gallery__img"></a></li>
                   <?php endforeach ?>
               </ul>
           <?php endif ?>


           <?php
            $team = get_posts([
                'post_type' => 'team',
                'numberposts' => 3,
            ])
            ?>
           <?php if ($team) : ?>
               <section class="crew container" id="crew">
                   <?php if (get_theme_mod('crew_title')) : ?>
                       <h2 class="section__title"><?php echo get_theme_mod('crew_title', 'default') ?></h2>
                   <?php endif ?>
                   <ul class="crew-list">
                       <?php foreach ($team as $member) :
                            $post = $member;
                            setup_postdata($member);
                        ?>
                           <li class="crew-item">
                               <?php the_post_thumbnail('small', ['class' => 'crew-img']) ?>

                               <span class="crew-occup"><?php the_excerpt() ?></span>
                               <span class="crew-name"><?php the_title() ?></span>
                           </li>
                       <?php endforeach;
                        wp_reset_postdata(); ?>
                   </ul>
               </section>
           <?php endif ?>
           <?php
            $lang_id = pll_get_post(99);
            $statistic = get_post($lang_id); ?>
           <?php if ($statistic) : ?>
               <section class="statistic" id="statistic" style="background-image:url('<?php echo get_the_post_thumbnail_url($statistic->ID, 'full'); ?>')">
                   <div class="container">
                       <div class="statistic-info">
                           <h2 class="section__title statistic-title"> <?php echo get_post_meta(268, 'tops_meta', true); ?><?php echo $statistic->post_title; ?></h2>
                           <?php echo $statistic->post_content; ?>
                           <dl class="statistics">
                               <dt class="statistics-number">
                                   <?php echo get_post_meta($statistic->ID, 'clients_meta', true); ?>
                               </dt>
                               <dd class="statistics-label">
                                   <?php esc_html_e('HAPPY CLIENTS', 'ski'); ?>
                               </dd>

                               <dt class="statistics-number">
                                   <?php echo get_post_meta($statistic->ID, 'awards_meta', true); ?>
                               </dt>
                               <dd class="statistics-label">
                                   <?php esc_html_e('PROFESSIONAL AWARDS', 'ski'); ?>
                               </dd>
                               <dt class="statistics-number">
                                   <?php echo get_post_meta($statistic->ID, 'tops_meta', true); ?>
                               </dt>
                               <dd class="statistics-label">
                                   <?php esc_html_e('REACHED TOPS', 'ski'); ?>
                               </dd>

                           </dl>
                       </div>
                   </div>
               </section>
           <?php endif ?>
           <?php
            $testimonials = get_posts([
                'post_type' => 'testimonials',
                'numberposts' => -1,
                'order' => 'asc'
            ]);
            ?>
           <?php if ($testimonials) : ?>
               <section class="testimonials container" id="testimonials">
                   <h2 class="section__title testimonials-title"><?php esc_html_e('Testimonials', 'ski') ?></h2>
                   <div class="reviews">
                       <ul class="rewievs-list">
                           <?php
                            $active = 0;
                            foreach ($testimonials as $testimonial) :
                                $post = $testimonial;
                                setup_postdata($testimonial);

                            ?>
                               <li class="review-item <?php if ($active == 0) echo 'active' ?>">
                                   <div class="review-img__block">
                                       <?php the_post_thumbnail('full', ['class' => 'review-img']) ?>
                                   </div>
                                   <h3 class="review-name"><?php the_title() ?></h3>
                                   <p class="review-text"><?php the_excerpt() ?></p>
                               </li>
                           <?php
                                $active = 1;
                            endforeach;
                            wp_reset_postdata(); ?>
                       </ul>

                       <ul class="slider-dots">
                           <li class="slider-dots__item slider-dots--active"></li>
                           <li class="slider-dots__item"></li>
                           <li class="slider-dots__item"></li>
                           <li class="slider-dots__item"></li>
                           <li class="slider-dots__item"></li>
                       </ul>
                   </div>
               </section>
           <?php endif ?>
           <?php get_footer() ?>