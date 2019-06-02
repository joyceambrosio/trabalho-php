<?php

require_once("../dao/ServicoDao.php");
require_once("../model/Servico.class.php");

session_start();

$opcao = $_REQUEST['form_opcao'];

if ($opcao == 1) {
	$servico = new Servico($_REQUEST['id_servico'], $_REQUEST['nome_servico'], $_REQUEST['descricao_servico'], $_REQUEST['valor_servico']);

	$servicoDao = new ServicoDao();
	$servicoDao->incluirServico($servico);

	header("Location:../controler/servicoControler.php?opcao=2");

}


?>