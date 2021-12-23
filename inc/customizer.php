<?php

function ski_castomization($wp_customize)
{
    //Intro Panel
    $wp_customize->add_panel('intro_panel', array(
        'title' => esc_html__('Intro', 'ski'),
        'description' => esc_html__('Site intro info', 'ski'),
        'priority' => 10,
    ));

    $wp_customize->add_section('intro_title', array(
        'title' => esc_html__('Intro Title', 'ski'),
        'description' => esc_html__('Write intro title', 'ski'),
        'priority' => 10,
        'panel' => 'intro_panel',
    ));

    $wp_customize->add_setting('intro_title_text', array(
        'default' => esc_html__('SKI & SNOWBOARD SCHOOL!!!)', 'ski'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('intro_title_text', array(
        'label' => esc_html__('Write intro title', 'ski'),
        'section' => 'intro_title',
        'settings' => 'intro_title_text',
        'type' => 'text',
    ));

    //pen
    $wp_customize->selective_refresh->add_partial('intro_title_text', array(
        'selector' => '#promo-suptitle'
    ));

    //Intro bg title
    $wp_customize->add_section('intro_bg_title', array(
        'title' => esc_html__('Intro Background Title', 'ski'),
        'description' => esc_html__('Write intro background title', 'ski'),
        'priority' => 10,
        'panel' => 'intro_panel',
    ));

    $wp_customize->add_setting('intro_bg_title_text', array(
        'default' => esc_html__('STAY & SKI', 'ski'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('intro_bg_title_text', array(
        'label' => esc_html__('Write intro title', 'ski'),
        'section' => 'intro_bg_title',
        'settings' => 'intro_bg_title_text',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('intro_bg_title_text', array(
        'selector' => '#promo-title'
    ));

    //Intro button bg color
    $wp_customize->add_section('intro_button_bg', array(
        'title' => esc_html__('Intro Button Color', 'ski'),
        'description' => esc_html__('Choose intro button background color', 'ski'),
        'priority' => 10,
        'panel' => 'intro_panel',
    ));

    $wp_customize->add_setting('intro_button_bg_color', array(
        'default' => '#ff690f',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'intro_button_bg_color',
            array(
                'label'      => esc_html__('Intro Button Background Color', 'ski'),
                'section'    => 'intro_button_bg',
                'settings'   => 'intro_button_bg_color',
            )
        )
    );

    $wp_customize->selective_refresh->add_partial('intro_button_bg_color', array(
        'selector' => '#intro-btn'
    ));

    //Intro button text
    $wp_customize->add_section('intro_button_txt_section', array(
        'title' => esc_html__('Intro Button Text', 'ski'),
        'description' => esc_html__('Choose intro button text', 'ski'),
        'priority' => 10,
        'panel' => 'intro_panel',
    ));

    $wp_customize->add_setting('intro_button_txt', array(
        'default' => 'online booking',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('intro_button_txt', array(
        'label' => esc_html__('Write intro button text', 'ski'),
        'section' => 'intro_button_txt_section',
        'settings' => 'intro_button_txt',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('intro_button_txt', array(
        'selector' => '#btn-txt'
    ));

    //Intro Bg image
    $wp_customize->add_section('intro_bg_img_section', array(
        'title' => esc_html__('Intro Background Image', 'ski'),
        'description' => esc_html__('Choose intro bg image', 'ski'),
        'priority' => 10,
        'panel' => 'intro_panel',
    ));

    $wp_customize->add_setting('intro_bg_img', array(
        'default' => 'http://ski/wp-content/uploads/2021/12/header-bg.png',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'intro_bg_img',
            array(
                'label' => esc_html__('Choose intro bg image', 'ski'),
                'section' => 'intro_bg_img_section',
                'settings' => 'intro_bg_img'
            )
        )
    );

    $wp_customize->selective_refresh->add_partial('intro_bg_img', array(
        'selector' => '.promo-block'
    ));

    //Offer Panel
    $wp_customize->add_panel('offer_panel', array(
        'title' => esc_html__('Offer', 'ski'),
        'description' => esc_html__('Site offer info', 'ski'),
        'priority' => 10,
    ));

    $wp_customize->add_section('offer_header_txt_section', array(
        'title' => esc_html__('Offer Title Text', 'ski'),
        'description' => esc_html__('Write Offer Title Text', 'ski'),
        'priority' => 10,
        'panel' => 'offer_panel',
    ));

    $wp_customize->add_setting('offer_header_txt', array(
        'default' => 'WHAT WE OFFER',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('offer_header_txt', array(
        'label' => esc_html__('Write Offer Title Text', 'ski'),
        'section' => 'offer_header_txt_section',
        'settings' => 'offer_header_txt',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('offer_header_txt', array(
        'selector' => '.section__title.offer'
    ));

    //Offer desc
    $wp_customize->add_section('offer_desc_section', array(
        'title' => esc_html__('Offer Description', 'ski'),
        'description' => esc_html__('Write Offer Description', 'ski'),
        'priority' => 10,
        'panel' => 'offer_panel',
    ));

    $wp_customize->add_setting('offer_desc', array(
        'default' => 'Skiing and snowboarding still rank among the undisputed winter sport highlights',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('offer_desc', array(
        'label' => esc_html__('Write Offer Description', 'ski'),
        'section' => 'offer_desc_section',
        'settings' => 'offer_desc',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('offer_desc', array(
        'selector' => '.offer__desc'
    ));

    //offers show BOOLEAN
    $wp_customize->add_section('offer_show_section', array(
        'title' => esc_html__('Disable offer section', 'ski'),
        'description' => esc_html__('Disable offer section', 'ski'),
        'priority' => 10,
        'panel' => 'offer_panel',
    ));

    $wp_customize->add_setting('offer_show', array(
        'default' => 'show',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('offer_show', array(
        'label' => esc_html__('Choose for disable offer section', 'ski'),
        'section' => 'offer_show_section',
        'settings' => 'offer_show',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show offers section', 'ski'),
            'hide' => esc_html__('Disable offers section', 'ski')
        ),
    ));

    $wp_customize->selective_refresh->add_partial('offer_show', array(
        'selector' => '#offer'
    ));

    //crew section title
    $wp_customize->add_panel('crew_panel', array(
        'title' => esc_html__('Crew', 'ski'),
        'description' => esc_html__('Site crew info', 'ski'),
        'priority' => 10,
    ));

    $wp_customize->add_section('crew_title_section', array(
        'title' => esc_html__('Crew Section Title', 'ski'),
        'description' => esc_html__('Write crew section title', 'ski'),
        'priority' => 10,
        'panel' => 'crew_panel',
    ));

    $wp_customize->add_setting('crew_title', array(
        'default' => esc_html__('MEET OUR CREW', 'ski'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('crew_title', array(
        'label' => esc_html__('Write crew section title', 'ski'),
        'section' => 'crew_title_section',
        'settings' => 'crew_title',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('crew_title', array(
        'selector' => '#crew'
    ));

    //Contacts Panel
    $wp_customize->add_panel('contacts_panel', array(
        'title' => esc_html__('Contacts', 'ski'),
        'description' => esc_html__('Site contacts info', 'ski'),
        'priority' => 10,
    ));

    $wp_customize->add_section('contacts_number_section', array(
        'title' => esc_html__('Contacts Number Section', 'ski'),
        'description' => esc_html__('Write your number', 'ski'),
        'priority' => 10,
        'panel' => 'contacts_panel',
    ));

    $wp_customize->add_setting('contacts_number', array(
        'default' => '+0 000 00 000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contacts_number', array(
        'label' => esc_html__('Write your number', 'ski'),
        'section' => 'contacts_number_section',
        'settings' => 'contacts_number',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_number', array(
        'selector' => '.contacts-phone'
    ));

    //address
    $wp_customize->add_section('contacts_address_section', array(
        'title' => esc_html__('Contacts Address Section', 'ski'),
        'description' => esc_html__('Write your address', 'ski'),
        'priority' => 10,
        'panel' => 'contacts_panel',
    ));

    $wp_customize->add_setting('contacts_address', array(
        'default' => 'PARACELSUSSTRASSE/SALZBURG, AUSTRIA',
        'transport' => 'refresh',
    ));    

    $wp_customize->add_control('contacts_address', array(
        'label' => esc_html__('Write your address', 'ski'),
        'section' => 'contacts_address_section',
        'settings' => 'contacts_address',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_address', array(
        'selector' => '.contacts-address'
    ));

    //mail
    $wp_customize->add_section('contacts_mail_section', array(
        'title' => esc_html__('Contacts Mail Section', 'ski'),
        'description' => esc_html__('Write your mail', 'ski'),
        'priority' => 10,
        'panel' => 'contacts_panel',
    ));

    $wp_customize->add_setting('contacts_mail', array(
        'default' => 'mamikonars@yandex.ru',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contacts_mail', array(
        'label' => esc_html__('Write your mail', 'ski'),
        'section' => 'contacts_mail_section',
        'settings' => 'contacts_mail',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_mail', array(
        'selector' => '.contacts-mail'
    ));

    //work
    $wp_customize->add_section('contacts_work_section', array(
        'title' => esc_html__('Contacts Work Time Section', 'ski'),
        'description' => esc_html__('Write your work time', 'ski'),
        'priority' => 10,
        'panel' => 'contacts_panel',
    ));

    $wp_customize->add_setting('contacts_work', array(
        'default' => 'OPEN HOURS: 8.00 – 10.00 MONDAY - SUNDAY',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contacts_work', array(
        'label' => esc_html__('Write your work time', 'ski'),
        'section' => 'contacts_work_section',
        'settings' => 'contacts_work',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_work', array(
        'selector' => '.contacts-hour'
    ));

    //map section
    $wp_customize->add_section('contacts_map_section', array(
        'title' => esc_html__('Contacts Map Section', 'ski'),
        'description' => esc_html__('Write map iframe code', 'ski'),
        'priority' => 10,
        'panel' => 'contacts_panel',
    ));

    $wp_customize->add_setting('contacts_map', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'contacts_map', array(
        'label'     => esc_html__('Write map iframe code', 'ski'),
        'code_type' => 'text/html',
        'settings'  => 'contacts_map',
        'section'   => 'contacts_map_section',
    )));

    $wp_customize->selective_refresh->add_partial('contacts_map', array(
        'selector' => '#map'
    ));

    //Socials  Panel
    $wp_customize->add_panel('social_panel', array(
        'title' => esc_html__('Social', 'ski'),
        'description' => esc_html__('Site social media info', 'ski'),
        'priority' => 10,
    ));

    //facebook
    $wp_customize->add_section('contacts_fb_section', array(
        'title' => esc_html__('Contacts FB Link Section', 'ski'),
        'description' => esc_html__('Write your fb link', 'ski'),
        'priority' => 10,
        'panel' => 'social_panel',
    ));

    $wp_customize->add_setting('contacts_fb', array(        
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contacts_fb', array(
        'label' => esc_html__('Write your fb link', 'ski'),
        'section' => 'contacts_fb_section',
        'settings' => 'contacts_fb',
        'type' => 'url',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_fb', array(
        'selector' => '#fb'
    ));

    //twitter
    $wp_customize->add_section('contacts_tw_section', array(
        'title' => esc_html__('Contacts Twitter Link Section', 'ski'),
        'description' => esc_html__('Write your twitter link', 'ski'),
        'priority' => 10,
        'panel' => 'social_panel',
    ));

    $wp_customize->add_setting('contacts_tw', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contacts_tw', array(
        'label' => esc_html__('Write your twitter link', 'ski'),
        'section' => 'contacts_tw_section',
        'settings' => 'contacts_tw',
        'type' => 'url',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_tw', array(
        'selector' => '#twitter'
    ));

    //inst
    $wp_customize->add_section('contacts_inst_section', array(
        'title' => esc_html__('Contacts Instagram Link Section', 'ski'),
        'description' => esc_html__('Write your instagram link', 'ski'),
        'priority' => 10,
        'panel' => 'social_panel',
    ));

    $wp_customize->add_setting('contacts_inst', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contacts_inst', array(
        'label' => esc_html__('Write your instagram link', 'ski'),
        'section' => 'contacts_inst_section',
        'settings' => 'contacts_inst',
        'type' => 'url',
    ));

    $wp_customize->selective_refresh->add_partial('contacts_inst', array(
        'selector' => '#insta'
    ));
}
