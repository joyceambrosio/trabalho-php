<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Tipo</title>
    </head>
    <body>
    <center>
        <b> CADASTRAR TIPO </b><br><br>
        <form action="src/controler/controlerTipo.php" method="POST">
            <label> Nome: </label> <input type="text" name="txtNomeTipo"><br><br>
            <label> Valor: </label> <input type="text" name="txtValorTipo"><br><br>
            <input type="hidden" name="opcao" value="1">
            <input type="submit" value="Salvar">
            <input type="reset" value="Cancelar">
        </form>
    </center>
    </body>
</html>
