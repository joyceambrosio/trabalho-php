<?php

require_once '../dao/ClienteDao.php';
require_once '../model/Cliente.class.php';
require_once '../model/Endereco.class.php';

session_start();

$opcao = (int)$_REQUEST['form_opcao'];

$dao = new ClienteDao();

switch ($opcao) {
    case 1:

        //cadastro de Cliente

        if (
            isset($_REQUEST['form_nome']) &&
            isset($_REQUEST['form_cpf']) &&
            isset($_REQUEST['form_data']) &&
            isset($_REQUEST['form_telefone']) &&
            isset($_REQUEST['form_email']) &&
            isset($_REQUEST['form_senha']) &&
            isset($_REQUEST['form_logradouro']) &&
            isset($_REQUEST['form_numero']) &&
            isset($_REQUEST['form_bairro']) &&
            isset($_REQUEST['form_cidade']) &&
            isset($_REQUEST['form_cep']) &&
            isset($_REQUEST['form_estado'])
        )
        {
            $nome = $_REQUEST['form_nome'];
            $cpf = $_REQUEST['form_cpf'];
            $data = $_REQUEST['form_data'];
            $telefone = $_REQUEST['form_telefone'];
            $email = $_REQUEST['form_email'];
            $senha = $_REQUEST['form_senha'];
            $logradouro = $_REQUEST['form_logradouro'];
            $numero = $_REQUEST['form_numero'];
            $bairro = $_REQUEST['form_bairro'];
            $cidade = $_REQUEST['form_cidade'];
            $cep = $_REQUEST['form_cep'];
            $estado = $_REQUEST['form_estado'];

        }

        $cliente = new Cliente();
        $cliente->setNome($nome);
        $cliente->setCpf($cpf);
        $cliente->setDataNascimento($data);
        $cliente->setTelefone($telefone);
        $cliente->setEmail($email);
        $cliente->setSenha($senha);

        $endereco = new Endereco();

        $endereco->setLogradouro($logradouro);
        $endereco->setNumero($numero);
        $endereco->setBairro($bairro);
        $endereco->setCidade($cidade);
        $endereco->setCep($cep);
        $endereco->setUf($estado);

        $cliente->setEndereco($endereco);

        $dao->create($cliente);
        echo "<pre>";
        var_dump($cliente);
        echo "</pre>";

        header("Location:clienteControler.php?form_opcao=2");

        break;
    case 2:

        //listar Clientes

        $dao = new ClienteDao();
        $lista = $dao->getList();
        echo "<pre>";

        echo "<h1>lista de cliente</h1>";
        var_dump($lista);
        echo "</pre>";

        break;
    case 3:
        echo "Edicao ainda não implementada";
        break;
    case 4:
        echo "Remocao 3 ainda não implementada";
        break;
    default:
        header("Location:../../400.php");
        break;
}



