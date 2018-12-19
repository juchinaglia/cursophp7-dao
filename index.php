<?php 

require_once ("config.php");
require_once ("usuario.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT*FROM tb_usuario");

// echo json_encode($usuarios); 
 
$root = new Usuario();

$root->loadById(1);

echo $root;


 ?>