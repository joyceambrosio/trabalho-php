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

<form action="src/controler/ClienteControler.php" method="POST">

    <fieldset>

        <legend> Cadastro de Cliente</legend>

        <label for="form_nome">Nome</label>
        <input type="text" name="form_nome" placeholder="Nome completo" required value="Joana da Silva">

        <label for="form_cpf">CPF</label>
        <input type="text" name="form_cpf" required value="13964398039">

        <label for="form_data">Data de Nascimento</label>
        <input type="date" name="form_data" required value="1990-10-17">


        <legend> Contato</legend>

        <label for="form_telefone">Telefone</label>
        <input type="text" name="form_telefone" required value="2899999999">

        <label for="form_email">Email</label>
        <input type="email" name="form_email" required value="joana@email.com">

        <label for="form_senha">Senha</label>
        <input type="password" name="form_senha" required value="123456">


        <legend> Endereço</legend>

        <label for="form_logradouro">Logradouro</label>
        <input type="text" name="form_logradouro" required value="Rua das Flores">

        <label for="form_numero">Número</label>
        <input type="text" name="form_numero" required value="51">

        <label for="form_cidade">Cidade</label>
        <input type="text" name="form_cidade" required value="Vitória">

        <label for="form_bairro">Bairro</label>
        <input type="text" name="form_bairro" required value="Centro">

        <label for="form_cep">Cep</label>
        <input type="text" name="form_cep" required value="29500-000">

        <label for="form_estado">Estado</label>
        <select id="form_estado" name="form_estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES" selected>Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>

        <input type="hidden" name="form_opcao" value="1">

        <div class="submit-button-area">
            <input class="button" type="reset" value="Cancelar">
            <input class="button-primary" type="submit" value="Cadastrar">
        </div>


    </fieldset>


</form>

</body>
</html>