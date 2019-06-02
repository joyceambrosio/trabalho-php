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
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading">Formulário de Login</h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Login de Administrador</h2>
                <p>Por favor, informe nome de usuário e senha</p>
            </div>

            <form id="Login" action="src/controler/LoginControler.php" method="post">

                <div class="form-group">
                    <input type="text" class="form-control" name="usuario_form"
                           placeholder="Nome de Usuário" required>
                    <small id="passwordHelp"
                           class="text-danger"> <?php echo(isset($_SESSION['erroNome']) ? $_SESSION['erroNome'] : " ") ?> </small>
                </div>


                <div class="form-group">
                    <input type="password" class="form-control" name="senha_form" placeholder="Senha"
                           required>
                    <small id="passwordHelp"
                           class="text-danger"> <?php echo(isset($_SESSION['erroSenha']) ? $_SESSION['erroSenha'] : " ") ?> </small>
                </div>


                <div class="form-group">
                    <input type="hidden" name="form_opcao" value="1">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Logar">
                </div>


                <div class="form-group">
                    <small>Recuperar senha</small>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>