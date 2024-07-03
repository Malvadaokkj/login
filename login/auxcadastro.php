<?php
include 'classe/Usuario.php';
echo "<pre>";
var_dump($_POST);
echo "</pre>";
// Se o campo não estiver preenchido ele cadastr a info no banco de dados
if (empty($_POST['id_para_alterar'] == '')) {

    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    $id_para_alterar = $_POST['id_para_alterar'];

    $usuario = new Usuario();

    $resultado = $usuario->AtualizarUsuario($id_para_alterar, $user, $password, $passwordConfirm);

}

// Valido de o campo esta preenchido
// Se o campo estiver preenchido ele vai fazer um update no banco de dados

