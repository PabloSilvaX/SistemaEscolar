<?php
include_once 'model/Login.php';

 class LoginController{

    public function index(){
        include_once 'template/header.php';
        include_once 'template/navbar.php';
        include_once 'view/view_login.php';
        // include_once 'template/footer.php';
        include_once 'template/rodape.php';
    }

 }

?>