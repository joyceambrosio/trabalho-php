<!DOCTYPE html>
<?php
    session_start();
    $tipos =$_REQUEST['tipos'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exibir Tipo</title>
    </head>
    <body>
    <center>
        <table border="1" cellspacing="2" cellpadding="1" width="50%">
            <tr><td align="center" colspan="6"><b>EXIBIR TIPO</b></tr>
            <tr>
                <th>ID:</th>
                <th>Nome:</th>
                <th>Valor:</th>
            </tr>
                <?php
                    foreach ($tipos as $tipo){
                ?>
                    <tr align="center">
                        <td> <?php echo $tipo->getId(); ?> </td>
                        <td> <?php echo $tipo->getNome(); ?> </td>
                        <td> <?php echo $tipo->getValor(); ?> </td>
                <?php
                }
                ?>
                    </tr>
        </table>
    </center>
    </body>
</html>
