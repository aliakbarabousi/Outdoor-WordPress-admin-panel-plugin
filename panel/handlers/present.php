<?php 
class present{

    public  function presention(){
        include 'DashboardHandler.php';

       return $this->index();
    }
}