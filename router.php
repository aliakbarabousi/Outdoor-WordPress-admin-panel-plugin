<?php

class Router
{
    public function __construct(){
        add_action ('init',array($this,'handleURI'));
    }

    public function handleURI(){
        if($this->check_user()) {
            $request_uri = $_SERVER['REQUEST_URI'];
            if (strpos($request_uri, 'dashboard') == false) {
                return;
            }
            $uri = $this->pars_url($request_uri);
            $class_name = $this->handle_class_name_url($uri);
            $file_path = $this->handle_path_url($class_name);
            $this->load($file_path);
            $instace = new $class_name;
            $instace->index();
            exit();
        }
    }

    private function check_user(){
        return is_user_logged_in();
    }

    private function pars_url($handler){
        $handler = explode('/',strtok($handler, '?'));
        $handler = end($handler);
        return $handler;
    }
   

    private function handle_class_name_url($name){
        $name = ucfirst($name);
        return $name;
    } 

    private function handle_path_url($file_name){
        $file_path = UPP_PATH . 'panel'.DIRECTORY_SEPARATOR.'handlers'.DIRECTORY_SEPARATOR.$file_name.'Handler'.'.php';
        if($this->check_url($file_path)){
            return $file_path;
        }
    }

    private function load($file_path){
        include_once $file_path;
    }


    private function check_url($file_path){
        $cheker_path = file_exists($file_path) && is_readable($file_path);
         $check = $cheker_path ?1:$this->error();
         return $check;
     }
 
     private function error(){
         throw new exception ('NOT FOUND');
 
     }

}