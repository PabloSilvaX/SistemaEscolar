<?php
require_once 'model/Cliente.php';

class ClienteController {

 public function listar() {
 $cliente = new Cliente();
 $clientes = $cliente->listAll();

 $_REQUEST['clientes'] = $clientes;

 require_once 'view/cliente_view.php';
 }

 public function index($param){
     include_once 'template/header.php';
    // echo "Classe: ".$param['0']."<br>";
    // echo "Metodo: ".$param['1']."<br>";
    // echo "Parametro: ".$param['2']."<br>";
    // echo "Segundo Parametro: ".$param['3']."<br>";
      $cliente = new Cliente();
      $cliente->mensagem();
     include_once 'template/rodape.php';
 }
}
