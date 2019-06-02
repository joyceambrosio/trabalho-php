<?php

require_once("../dao/ServicoDao.php");
require_once("../model/Servico.class.php");

session_start();

$opcao = $_REQUEST['form_opcao'];

//criar serviço

if ($opcao == 1) {
    $servico = new Servico($_REQUEST['nome_servico'], $_REQUEST['descricao_servico'], $_REQUEST['valor_servico'], $_REQUEST['tipo_servico']);

    $servicoDao = new ServicoDao();
    $servicoDao->incluirServico($servico);
    var_dump($servico);

   //header("Location:../controler/servicoControler.php?form_opcao=2");

}

//listar serviços

if ($opcao == 2) {

    $dao = new ServicoDao();
    $lista = $dao->getList();

    echo "<pre>";
    echo "<h1>lista de serviços</h1>";
    var_dump($lista);
    echo "</pre>";

}

//excluir serviço

if ($opcao == 3) {
    $id = (int)$_REQUEST['id_servico'];
    $servicoDao = new ServicoDao();

    $servicoDao->excluirServico($id);

    header("Location:../controler/servicoControler.php?form_opcao=2");
}

//atualizar serviço

if ($opcao == 4) {
    
}


?>