<?php

require_once("config.php");

$root = new Usuario();

$root->loadbyId(8);

echo $root;

/*$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

var_dump($usuarios);
*/
?>