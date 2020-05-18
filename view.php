<?php 


class view {

    
    public static function load($index_view,$data = array(),$layout = 'default'){

        $index_view = $index_view.'.php';
        $file_path = UPP_VIEW_DEFAULT;
        $file_name = $layout . '.php';
        $layout = $file_path.$file_name;
        if(file_exists($layout) && is_readable($layout)){

            extract($data);
            include ($layout);

        }

    } 

}