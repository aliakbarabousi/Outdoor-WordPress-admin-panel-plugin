<?php

abstract class Handler{

    protected $ID;
    protected $NAME;
    protected $EMAIL;
    protected $PASS;
    public function __construct()
    {
        global $current_user;
       $this->ID = $current_user->ID;
       $this->NAME = $current_user->display_name;
       $this->EMAIL = $current_user->user_email;
       $this->PASS = $current_user->user_pass;
    }

    abstract function index();

}
