<?php

/**
 * WordPress settings API
 *
 * @author InternetCSS
 */
if ( !class_exists('EB_Google_Map_Settings' ) ):
class EB_Google_Map_Settings {

    private $settings_api;

    function __construct() {
        $this->settings_api = new EB_Map_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu'), 502 );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();

    }


    function admin_menu() {
        add_submenu_page( Elementor\Settings::PAGE_ID, __( 'Google Map Extended', 'extended-google-map-for-elementor' ), __( 'Google Map Extended', 'extended-google-map-for-elementor' ), 'delete_posts', 'eb_google_map_setting', 
            array($this, 'plugin_page' ) );
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id'    => 'eb_map_general_settings',
                'title' => __( 'Google Map API', 'extended-google-map-for-elementor' ),
            ),
            array(
                'id'    => 'eb_map_pro_version',
                'title' => __( 'Pro Version', 'extended-google-map-for-elementor' ),
                'desc'  => __( '<p>If you are looking to enhance your Google Map experience in Elementor such as animation, styles, marker clustering, marker listing or direction, then the Pro version is for you. Take a look at the <a href="https://internetcss.com/elementor-google-map-extended-pro-demo/" target="_blank">demo</a> and see what the Elementor Google Map Extended Pro can do and help you in your Project.</p><p class="submit"><a href="https://internetcss.com/elementor-google-map-extended-pro-demo/" class="button button-primary" target="_blank">View Demo</a></p>', 'extended-google-map-for-elementor' ),
            ),
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'eb_map_general_settings' => array(
                array(
                    'name'              => 'eb_google_map_api_key',
                    'label'             => __( 'Google Map API', 'extended-google-map-for-elementor' ),
                    'desc'              => __( 'You will need Google Map API in order to use Elementor Map Extended Module. If not you can <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">click here</a> to generate one.', 'extended-google-map-for-elementor' ),
                    'placeholder'       => __( 'Enter your Google Map API here', 'extended-google-map-for-elementor' ),
                    'type'              => 'text',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
				array(
                    'name'    => 'eb_google_map_lang',
                    'label'   => __( 'Google Map Language', 'extended-google-map-for-elementor' ),
                    'type'    => 'select',
                    'default' => 'en',
                    'options' => array(
                        'en' => 'English',
                        'en-Au'  => 'English (Australian)',
						'en-GB'  => 'English (Great Britain)',
						'es'  => 'Español',
						'de'  => 'Deutsch',
						'fr'  => 'Français',
						'pt'  => 'Português',
						'ar'  => 'العربية',
						'ja'  => '日本語',
						'ko'  => '한국어',
						'zh-CN'  => '简体中文',
                        'vi'  => 'Tiếng Việt',
                        'th'  => 'ไทย',
                        'iw'  => 'עִבְרִית',
                    )
                ),
            ),
            
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap"><h1>Elementor Google Map Extended</h1>';

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
        function remove_footer_admin () {
            echo 'Enjoy Elementor Google Map Extended? Please leave us a <a href="https://wordpress.org/support/plugin/extended-google-map-for-elementor/reviews/?filter=5#new-post" target="_blank">★★★★★</a> rating. Thank you!';
        }
        add_filter('admin_footer_text', 'remove_footer_admin');
    }

    

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;