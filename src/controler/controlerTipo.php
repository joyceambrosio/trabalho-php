<?php
    require_once ('../model/Tipo.class.php');
    require_once ('../dao/TipoDao.php');
    
    $opcao = (int) $_REQUEST['opcao'];
    
    /**
     * Cria um Tipo.
     */
    if($opcao == 1){
        $tipo = new Tipo($_REQUEST['txtNomeTipo'], $_REQUEST['txtValorTipo']);
        $tipoDao = new TipoDao();
        
        $tipoDao->criarTipo($tipo);
        header("Location:controler/controlerTipo.php?opcao=2");
    }
    
    /**
     * Exibe os Tipos.
     */
    if($opcao == 2){
        $tipoDao = new TipoDao();
        
        $lista = $tipoDao->getTipo();
        
        session_start();
        $_SESSION['tipos'] = $lista;
        
        header("Location:exibirTipo.php");
    }
    
    /**
     * Opção de Atualizar Tipo.
     */
    if(opcao == 3){
        $id = (int)$_REQUEST['id'];
        $tipoDao = new TipoDao();
        
        $tipo = $tipoDao->getTipoId($id);
        
        session_start();
        $_SESSION['tipo'] = $tipo;
        
        header("Location:../../formTipoAtualizar.php");
    }
    
    /**
     * Exclui um Tipo.
     */
    if(opcao == 4){
        $id = (int)$_REQUEST['id'];
        $tipoDao = new TipoDao();
        
        $tipoDao->removerTipo($id);
        
        header("Location:controler/controlerTipo.php?opcao=2");
    }
    
    /**
     * Atualiza um Tipo.
     */
    if(opcao == 5){
        $tipo = new Tipo($_REQUEST['pNomeTipo'], $_REQUEST['pValorTipo']);
        $tipo->setId($_POST['id']);
        
        $tipoDao = new TipoDao();
        $tipoDao->atualizarTipo($tipo);
        
        header("Location:controler/controlerTipo.php?opcao=2");
    }
?>