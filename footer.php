        <footer class="footer" id="contact">
            <section class="contacts">
                <h2 class="section__title footer-title"><?php esc_html_e('Contact Us', 'ski') ?></h2>
                <ul class="contacts-info">
                    <?php if (get_theme_mod('contacts_number')) : ?>
                        <li class="contacts-info__item contacts-phone">
                            <a href="tel:+<?php echo tel_number(get_theme_mod('contacts_number', 'default')) ?>"></a><?php echo get_theme_mod('contacts_number', 'default') ?>
                        </li>
                    <?php endif ?>
                    <?php if (get_theme_mod('contacts_address')) : ?>
                        <li class="contacts-info__item contacts-address">
                            <?php echo get_theme_mod('contacts_address', 'default') ?>
                        </li>
                    <?php endif ?>
                    <?php if (get_theme_mod('contacts_mail')) : ?>
                        <li class="contacts-info__item contacts-mail">
                            <a href="mailto:<?php echo get_theme_mod('contacts_mail', 'default') ?>"><?php echo get_theme_mod('contacts_mail', 'default') ?></a>
                        </li>
                    <?php endif ?>
                    <?php if (get_theme_mod('contacts_work')) : ?>
                        <li class="contacts-info__item contacts-hour">
                            <?php echo get_theme_mod('contacts_work') ?>
                        </li>
                    <?php endif ?>
                </ul>

                <ul class="social-list">
                    <?php if (get_theme_mod('contacts_tw')) : ?>
                        <li class="social-list__item" id="twitter"><a href="<?php echo get_theme_mod('contacts_tw') ?>" class="social__link"><img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png" alt="twitter" class="social__img"></a></li>
                    <?php endif ?>
                    <?php if (get_theme_mod('contacts_fb')) : ?>
                        <li class="social-list__item" id="fb"><a href="<?php echo get_theme_mod('contacts_fb') ?>" class="social__link"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png" alt="facebook" class="social__img"></a></li>
                    <?php endif ?>
                    <?php if (get_theme_mod('contacts_inst')) : ?>
                        <li class="social-list__item" id="insta"><a href="<?php echo get_theme_mod('contacts_inst') ?>" class="social__link"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.png" alt="instagram" class="social__img"></a></li>
                    <?php endif ?>

                </ul>
            </section>
            <?php if (get_theme_mod('contacts_map')) : ?>
                <div class="map-section" id="map">
                    <?php echo  get_theme_mod('contacts_map') ?>
                </div>
            <?php endif; ?>
            <div class="copyright">
                2021 | <?php esc_html_e('Portfolio site by', 'ski'); ?> <a class="author" href="https://vk.com/mamikonarsvk/" target="_blank">Mamikon</a>
            </div>
            <div class="to-top"></div>


        </footer>
        <div class="popup-wrapper">
            <div class="popup">
                <button class="close-btn" type="button"></button>
                <h2>SKI SCHOOL</h2>
                <!-- <form class="popup-form">
                    <div class="user-box">
                        <input type="text" name="user_name" required="">
                        <label>Name</label>
                    </div>
                    <div class="user-box">
                        <input type="tel" name="user_tel" required="">
                        <label>Phone</label>
                    </div>
                    <button class="submit-btn">Submit</button>
                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="133" html_class="popup-form"]'); ?>
            </div>
        </div>
        </div>
        <?php wp_footer(); ?>
        </body>

        </html>