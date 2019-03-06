<?php 

require_once("config.php");

/* Carrega todos os dados na tela usando apenas a classe sql

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/* Carrega os dados através do Idusuario que esta entre parenteses
trás apenas um resultado

$root = new Usuario();

$root->loadbyId(3);

echo $root;

*/

/* Carrega uma lista com todos os resultados usando um metodo estático (public static function)

$lista = Usuario::getList();

echo json_encode($lista);
*/

/*
realiza uma busca pelo campo que esta entre parenteses

$busca = Usuario::search("lu");

echo json_encode($busca);
*/

/* Carrega os dados do usuario que for autenticado na linha 43 entre parenteses.

$logar = new Usuario();

$logar->login("user","1232QEQW");

echo $logar;
*/











 ?>