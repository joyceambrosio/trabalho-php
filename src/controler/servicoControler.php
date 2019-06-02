<?php

require_once("../dao/ServicoDao.php");
require_once("../model/Servico.class.php");
require_once("../dao/TipoDao.php");

session_start();

$opcao =(int) $_REQUEST['form_opcao'];

//criar serviço

if ($opcao == 1) {
    $servico = new Servico($_REQUEST['nome_servico'], $_REQUEST['descricao_servico'], $_REQUEST['valor_servico'], $_REQUEST['tipo_servico']);

    $servicoDao = new ServicoDao();
    $servicoDao->incluirServico($servico);
    //var_dump($servico);

    //header("Location:../controler/servicoControler.php?form_opcao=5");

}

//listar serviços

if ($opcao == 2) {


    $dao = new ServicoDao();

    $_SESSION['servicos'] = $dao->getList();

    header("Location:../exibirServico.php");
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

//passar os tipos de serviços para o formulário de serviço

if($opcao == 5){
    //$dao = new TipoDao();

    //$_SESSION['tipos'] = $dao->getTipo();


    header("Location:../formServico.php");

}

?>