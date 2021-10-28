<?php
include_once 'model/Home.php';

class HomeController{

    public function index(){
        include_once 'template/header.php';
        include_once 'template/navbar.php';
        include_once 'view/view_home.php';
        include_once 'template/footer.php';
        include_once 'template/rodape.php';
    }
}

?>