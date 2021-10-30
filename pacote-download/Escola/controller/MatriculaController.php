<?php
require_once 'model/Matricula.php';

class MatriculaController{

    public function index(){
        include_once 'template/header.php';
        include_once 'template/navbar.php';
        include_once 'view/view_matricula.php';
        include_once 'template/footer.php';
        include_once 'template/rodape.php';
    }

    public function ChecarEmail(){
        $email = new Matricula();
        $email->checarEmail($_GET['email']);
    }

}

?>