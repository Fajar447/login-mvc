<?php
    include_once "Model/model.php";
  class controller {
    public $model;

    public function __construct(){
        $this-> model = new model ();
        
    }
    public function proses(){
        $reslt= $this->model->getlogin();

        if ($reslt == 'login') {
            include 'View/afterlogin.php';
        }
        else{
            include 'View/login.php';
        }
    }
  }
?>