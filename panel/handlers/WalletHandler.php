<?php 
include 'Handler.php';
include UPP_PATH.'view.php';

class Wallet extends Handler{
    public function __construct(){
    }

    public function index(){

        view::load('panel/wallet/index');

        
    }
}