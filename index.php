<?php

require_once("config.php");



// $root = new Usuario();

// $root -> loadById(7);

// echo $root."</br>";



// $lista = Usuario::getList();

// echo json_encode($lista);


// $search = Usuario :: search("za");

// echo json_encode($search);


$usuario = new Usuario();
$usuario->login("caio", "besta");

echo $usuario;

?>
