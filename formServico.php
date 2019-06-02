<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php include_once('templates/head.inc.php');
    session_start();
    ?>
</head>
<body id='formServico'>
<div class="container">
    <h1 class="form-heading">Formulário de Serviços</h1>
    <div class="servico-form">
    	<div class="main-div">
            <div class="panel">
            	<h2>Cadastro de Serviços</h2>
           	</div>

           	<form id='servico' action="src/controler/servicoControler.php" method="post">
           		<input type="text" name="id_servico">
           		<input type="text" name="nome_sevico">
           		<input type="text" name="descricao_servico">
           		<input type="text" name="valor_servico">

           		<input type="hidden" name="form_opcao" value="1">
           		<input type="submit" name="Cadastrar">
           		<input type="reset" name="Cancelar">
           		
           	</form>
        </div>
    </div>
</div>
	
</body>
</html>