<?php
/**
 * Classes file
 * 
 * @package Digifuse
 */
namespace DIGIFUSE_THEME\Inc;

use DIGIFUSE_THEME\Inc\Traits\Singleton;

class DIGIFUSE_THEME{
    use Singleton;

    protected function __construct() {
        
        Menus::get_instance();

        //load class
        $this->set_hooks();
    }
    protected function set_hooks() {
        
        //actions and filters
        add_action('after_setup_theme',[$this, 'setup_theme']);
        }
        public function setup_theme(){
            add_theme_support('title-tag');

            add_theme_support('custom-logo',[
                'header-text' =>['site-title','site-description'],
                'height' => 100,
                'width' => 400,
                'flex-height' =>true,
                'flex-width' =>true,
            ]);

            add_theme_support('custom-background',[
                    'default-color' => 'ffffff',
                    'default-image' => '',
                    'default-repeat' => 'no-repeat',
                ]
            );

            add_theme_support('post-thumbnails');
    }
}