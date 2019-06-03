<!DOCTYPE html>
<?php
	session_start();
	$servico = $_SESSION['servico'];
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualizar Serviços</title>
	<form action="src/controler/servicoControler.php" method="post">
		<label>Nome:</label><input type="text" name="nome_servico_at" value="<?php echo $servico->getNome(); ?>"><br>
		<label>Descrição:</label><input type="text" name="descricao_servico_at" value="<?php echo $servico->getDescricao(); ?>"><br>
		<label>Valor:</label><input type="text" name="valor_servico_at" value="<?php echo $servico->getValor();?>"><br>

        <input type="hidden" name="form_opcao" value="1">
        <input type="submit" name="Atualizar" value="Atualizar">
        <input type="reset" name="Cancelar" value="Cancelar">

	</form>
</head>
<body>

</body>
</html>