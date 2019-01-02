<?php 

require_once ("config.php");


// $sql = new Sql();

// $usuarios = $sql->select("SELECT*FROM tb_usuario");

// echo json_encode($usuarios); 
 
 //ESSE CARREGA 1 SÓ USUÁRIO	
// $root = new Usuario();

// $root->loadById(1);

//echo $root;

//CARREGA UMA LISTA DE USUARIOS

//$lista = Usuario::getList();

//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN

// $busca = Usuario::search("ro");

// echo json_encode($busca);

$usuario = new Usuario();
$usuario->login("root", "1234");

echo $usuario;
 ?>