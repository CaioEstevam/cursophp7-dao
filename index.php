<?php

require_once("config.php");



// $root = new Usuario();

// $root -> loadById(7);

// echo $root."</br>";



// $lista = Usuario::getList();

// echo json_encode($lista);


// $search = Usuario :: search("za");

// echo json_encode($search);


// $usuario = new Usuario();
// $usuario->login("caio", "besta");

// echo $usuario;

// $ninja = new Usuario();

// $ninja -> setDeslogin("Hatake");
// $ninja -> setDessenha("kakashi");

// $ninja -> insert();

// echo $ninja;

// $usuario = new Usuario();

// $usuario->loadById(8);

// $usuario->update("Tsunade", "Sama");

// echo $usuario;


$usuario = new Usuario();

$usuario->loadById(8);

$usuario->delete();

echo $usuario;


?>
