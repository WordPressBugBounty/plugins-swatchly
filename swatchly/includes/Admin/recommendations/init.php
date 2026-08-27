<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Constructor Parameters
 *
 * @param string    $text_domain your plugin text domain.
 * @param string    $parent_menu_slug the menu slug name where the "Recommendations" submenu will appear.
 * @param string    $submenu_label To change the submenu name.
 * @param string    $submenu_page_name an unique page name for the submenu.
 * @param int       $priority Submenu priority adjust.
 * @param string    $hook_suffix use it to load this library assets only to the recommedded plugins page. Not into the whol admin area.
 *
 */

require(  __DIR__ .'/Recommended_Plugins.php' );

if( class_exists('Swatchly\Admin\Recommended_Plugins') ){
    add_action('init', function() {
        $recommendations = new Swatchly\Admin\Recommended_Plugins(
            array( 
                'text_domain'       => 'swatchly',
                'parent_menu_slug'  => 'swatchly-admin', 
                'menu_capability'   => 'manage_options', 
                'menu_page_slug'    => 'swatchly_recommendations',
                'priority'          => '999',
                'assets_url'        => '',
                'hook_suffix'       => 'swatchly_page_swatchly_recommendations',
            )
        );
    
        $recommendations->add_new_tab( array(
            'title' => esc_html__( 'Recommended Plugins', 'swatchly' ),
            'active' => true,
            'plugins' => array(
                array(
                    'slug'      => 'woolentor-addons',
                    'location'  => 'woolentor_addons_elementor.php',
                    'name'      => esc_html__( 'ShopLentor – All-in-One WooCommerce Growth & Store Enhancement Plugin', 'swatchly' )
                ),
                array(
                    'slug'      => 'support-genix-lite',
                    'location'  => 'support-genix-lite.php',
                    'name'      => esc_html__( 'Support Genix – Helpdesk, AI Chatbot, Knowledge Base & Customer Support Ticketing System', 'swatchly' )
                ),
                array(
                    'slug'      => 'hashbar-wp-notification-bar',
                    'location'  => 'init.php',
                    'name'      => esc_html__( 'HashBar – Announcement, Notification Bar & Popup Campaign', 'swatchly' )
                ),
                array(
                    'slug'      => 'wp-plugin-manager',
                    'location'  => 'plugin-main.php',
                    'name'      => esc_html__( 'WP Plugin Manager – Deactivate plugins per page', 'swatchly' )
                ),
                array(
                    'slug'      => 'ht-contactform',
                    'location'  => 'contact-form-widget-elementor.php',
                    'name'      => esc_html__( 'HT Contact Form – Drag & Drop Form Builder for WordPress', 'swatchly' )
                ),
                array(
                    'slug'      => 'cookieray',
                    'location'  => 'cookieray.php',
                    'name'      => esc_html__( 'CookieRay – Cookie Banner for Cookie Consent (GDPR/CCPA Compliant)', 'swatchly' )
                ),
                array(
                    'slug'      => 'kelune-crm',
                    'location'  => 'kelune-crm.php',
                    'name'      => esc_html__( 'Kelune CRM – Contact Management, Email Marketing, Newsletter & Marketing Automation', 'swatchly' )
                ),
            )
        ));

        $recommendations->add_new_tab(array(
            'title' => esc_html__( 'WooCommerce', 'swatchly' ),
            'plugins' => array(
                array(
                    'slug'      => 'woolentor-addons',
                    'location'  => 'woolentor_addons_elementor.php',
                    'name'      => esc_html__( 'ShopLentor – All-in-One WooCommerce Growth & Store Enhancement Plugin', 'swatchly' )
                ),
                array(
                    'slug'      => 'whols',
                    'location'  => 'whols.php',
                    'name'      => esc_html__( 'Whols – Wholesale Prices and B2B Store Solution for WooCommerce', 'swatchly' )
                ),
                array(
                    'slug'      => 'recurio',
                    'location'  => 'recurio.php',
                    'name'      => esc_html__( 'Recurio – Ultimate Subscription for WooCommerce', 'swatchly' )
                ),
            )
        ));

        $recommendations->add_new_tab(array(
            'title' => esc_html__( 'Popular', 'swatchly' ),
            'plugins' => array(
                array(
                    'slug'      => 'wp-plugin-manager',
                    'location'  => 'plugin-main.php',
                    'name'      => esc_html__( 'WP Plugin Manager – Deactivate plugins per page', 'swatchly' )
                ),
                array(
                    'slug'      => 'ht-easy-google-analytics',
                    'location'  => 'ht-easy-google-analytics.php',
                    'name'      => esc_html__( 'HT Easy GA4 – Google Analytics WordPress Plugin', 'swatchly' )
                ),
                array(
                    'slug'      => 'cookieray',
                    'location'  => 'cookieray.php',
                    'name'      => esc_html__( 'CookieRay – Cookie Banner for Cookie Consent (GDPR/CCPA Compliant)', 'swatchly' )
                ),
                array(
                    'slug'      => 'insert-headers-and-footers-script',
                    'location'  => 'init.php',
                    'name'      => esc_html__( 'Insert Headers and Footers Code – HT Script', 'swatchly' )
                ),
                array(
                    'slug'      => 'pixelavo',
                    'location'  => 'pixelavo.php',
                    'name'      => esc_html__( 'Pixelavo – Server Side Tracking & Pixel + AI Ads Tools', 'swatchly' )
                ),
                array(
                    'slug'      => 'courseglade-lms',
                    'location'  => 'courseglade-lms.php',
                    'name'      => esc_html__( 'CourseGlade LMS – Online Course & eLearning Platform', 'swatchly' )
                ),
            )
        ));
    });
}