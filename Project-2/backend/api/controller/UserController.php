<?php
include '../model/user.php';


class UserController extends User{
    
    public function registerController(){
        return $this->Register($_POST);
    }
    
    public function loginController(){
        return $this->login($_POST);
    }
}


?>