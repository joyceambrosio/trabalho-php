<!DOCTYPE html>
<?php 
    session_start();
    $tipo = $_SESSION['tipo'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atualizar Tipo</title>
    </head>
    <body>
    <center>
        <b> ATUALIZAR TIPO </b><br><br>
        <form action="src/controler/controlerTipo.php" method="POST">
            <label> ID: </label> <input type="text" size="3" name="pId" value="<?php echo $tipo->id?>" readonly><br><br>
            <label> Nome: </label> <input type="text" size="50" name="pNomeTipo" value="<?php echo$tipo->nome?>"><br><br>
            <label> Valor: </label> <input type="text" size="15" name="pValorTipo" value="<?php echo$tipo->valor?>"><br><br>
            <input type="hidden" name="opcao" value="5">
            <input type="submit" value="Atualizar">
            <input type="reset" value="Cancelar">
        </form>
    </center>
    </body>
</html>
