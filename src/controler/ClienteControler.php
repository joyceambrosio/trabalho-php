<?php

require_once '../dao/ClienteDao.php';
require_once '../model/Cliente.class.php';

session_start();

$opcao = (int)$_REQUEST['form_opcao'];

$dao = new ClienteDao();

switch ($opcao) {
    case 1:

        $dao = new ClienteDao();
        $cliente = $dao->get(1);

        echo "<pre>";
        echo "<h1>detalhe de cliente</h1>";
        var_dump($cliente);
        echo "</pre>";

        break;
    case 2:

        $dao = new ClienteDao();
        $lista = $dao->getList();

        echo "<pre>";
        echo "<h1>lista de cliente</h1>";
        var_dump($lista);
        echo "</pre>";

        break;
    case 3:
        echo "Opcao 3 ainda não implementada";
        break;
    default:
        header("Location:../../400.php");
}



