<!DOCTYPE html>
<?php
	session_start();
	$servicos = $_REQUEST['servicos'];

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Exibir Serviços</title>
</head>
<body>
	 <table border="1" cellspacing="2" cellpadding="1" width="50%">
            <tr><td align="center" colspan="6"><b>EXIBIR SERVIÇO</b></tr>
            <tr>
                <th>ID:</th>
                <th>Nome:</th>
                <th>Descrição:</th>
                <th>Valor:</th>
                <th>Tipo:</th>
            </tr>

            <?php
            	foreach ($servicos as $servico) {
            		echo "<tr align="center">";
            		echo "<td>".$servico->idServico."</td>";
            		echo "<td>".$servico->nome."</td>";
            		echo "<td>".$servico->descricao."<td>";
            		echo "<td>".$servico->valor."</td>";
            		echo "<td>".$servico->idTipo."</td>";

            		echo "<td> <a href='controler/servicoControler.php?opcao=4&id=".$servico->idServico."'>Alterar</a>";
            		echo "<a href='controler/servicoControler.php?opcao=3&id=".$servico->idServico."'>Excluir Serviço </a>";
            	}

            ?>

</body>
</html>