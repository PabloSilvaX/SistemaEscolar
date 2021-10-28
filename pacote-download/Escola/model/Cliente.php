<?php
class Cliente {
 private $id;
 private $nome;

 /**
 * ...
 * getters e setters
 * ...
 *
 */

 public function mensagem(){
     echo "Metodo mensagem aleatoria";
 }

 public function save() {
 // logica para salvar cliente no banco
 }

 public function update() {
 // logica para atualizar cliente no banco
 }

 public function remove() {
 // logica para remover cliente do banco
 }

 public function listAll() {
 // logica para listar toodos os clientes do banco
 }

 /**
 * ...
 * outros métodos de abstração de banco
 * ...
 *
 */
}

?>