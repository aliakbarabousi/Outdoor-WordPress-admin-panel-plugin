<?php 

include 'Handler.php';
include UPP_PATH.'view.php';

class Dashboard extends Handler{
    public function __construct(){
    }

    public function index(){

        $current_user = wp_get_current_user();
        $params = [
          'user_name' => $current_user->display_name,
          'user_post_counts' => count_user_posts($current_user->ID),
          'user_comments_count' => $this->get_count_user_comments($current_user->ID)
        ];
        view::load('panel/dashboard/index',$params);
        
    }


    public function get_count_user_comments($user_id){
        global $wpdb, $current_user;
        get_currentuserinfo();
        $userId = $current_user->ID;

        $count = $wpdb->get_var('
             SELECT COUNT(comment_ID) 
             FROM ' . $wpdb->comments. ' 
             WHERE comment_approved=1 AND user_id = "' . $user_id . '"');

        return$count;

    }
}