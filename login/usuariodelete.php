<?php
include './classe/Usuario.php';
include './include/header.php';

var_dump($_GET);

$usuario = new Usuario();

$id = $_GET['id'];

$usuario = new Usuario();

$usuario->DeleteUsuario($id);

$resultado = $usuario->DeleteUsuario($id);

var_dump($resultado);

if ($resultado == 1) {
    header('location:lista.php?deletado=1');

}
