<?php

/*
Plugin Name: panel-pro
Plugin URI: http://aliakbarabousi.com/
Description: یک پنل رایگان که به صورت پلاگین بر روی وردپرس قالب نصب می باشد.
Version: 1.0.0
Author: aliakbar abousi
Author URI: http://aliakbarabousi.com/
Text Domain: oopPlugin
*/


class panelpro {


    public function __construct(){
        $this->constants();
        $this->init();
        $this->start_router();
    }


    public function activation(){}


    public function deactivation(){}


    public function init(){
        register_activation_hook(__FILE__,array($this,'activation'));
        register_deactivation_hook(__FILE__,array($this,'activation'));
    }


    public function constants(){

        define('UPP_PATH',plugin_dir_path(__FILE__));
        define('UPP_URI',plugin_dir_url(__FILE__));
        define('UPP_VIEW',UPP_PATH.DIRECTORY_SEPARATOR.'views');
        define('UPP_ASSETS',UPP_URI.'assets/');
        define('UPP_VIEW_DEFAULT',UPP_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'panel'.DIRECTORY_SEPARATOR.'layouts'.DIRECTORY_SEPARATOR);
        define('UPP_VIEW_INDEX',UPP_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
    }

    public function start_router(){
        include 'router.php';
        new Router();
    }
}

new panelpro;
