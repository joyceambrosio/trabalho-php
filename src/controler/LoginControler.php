<?php

require_once '../dao/UsuarioDao.php';
require_once '../model/Usuario.class.php';

session_start();

if (isset($_REQUEST['usuario_form']) && isset($_REQUEST['senha_form'])) {


    unset($_SESSION['erroNome']);
    unset($_SESSION['erroSenha']);

    $usuarioDao = new UsuarioDao();


    $erroNome = null;
    $erroSenha = null;

    $nomeusuario = trim($_REQUEST['usuario_form']);
    $senha = trim($_REQUEST['senha_form']);

    $usuarioLogando = $usuarioDao->getByNome(trim($nomeusuario));

    if (!$usuarioLogando) {
        $erroNome = "Nome de usuário inválido";
        $_SESSION['erroNome'] = $erroNome;
        header("Location:../../login.php");

    } elseif (strcmp($usuarioLogando->senha, $senha) != 0) {
        $erroSenha = "Senha inválida";
        $_SESSION['erroSenha'] = $erroSenha;
        header("Location:../../login.php");
    }
    if ((strcmp($usuarioLogando->usuario, $nomeusuario) == 0) && (strcmp($usuarioLogando->senha, $senha) == 0)) {

        header("Location:../../sucesso.php");
    }



//    echo "<pre>";
//    echo var_dump($senha);
//    echo var_dump($usuarioLogando);
//    echo var_dump(strcmp($usuarioLogando->senha, $senha));
//    echo var_dump(strcmp($usuarioLogando->usuario, $nomeusuario));
//    echo "</pre>";


}



