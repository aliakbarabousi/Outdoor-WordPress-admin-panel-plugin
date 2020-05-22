<?php

include 'Handler.php';
include UPP_PATH.'view.php';

class Dashboard extends Handler{


    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $params = $this->params();
        view::load('panel/dashboard/index',$params);

    }

    private function params(){
        $params = [
            'user_name' => $this->NAME,
            'user_post_counts' => count_user_posts($this->ID),
            'user_comments_count' => $this->get_count_user_comments($this->ID)
        ];

        return $params;
    }

    public function get_count_user_comments($user_id){
      global $wpdb;
        $count = $wpdb->get_var('
             SELECT COUNT(comment_ID)
             FROM ' . $wpdb->comments. '
             WHERE comment_approved=1 AND user_id = "' . $user_id . '"');

        return $count;

    }
}
