<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <style>
        form * {
            display: block;
        }
    </style>
    <title>Formulário de Login</title>
</head>

<body>
    
    <?php //Verifica se existem erros armazenados na sessao ?>
    <?php session_start(); ?>
    <?php if( isset( $_SESSION['erros'] ) ) { ?>
    <p><strong>Verifique os seguintes erros:</strong></p>
    <ul>
        <?php foreach ($_SESSION['erros'] as $erro) { ?>
            <li><?= $erro ?> </li>
        <?php } ?>
    </ul>
    <?php } ?>
    <?php unset($_SESSION['POST']); ?>

    <form action="Ex07.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar" />
    </form>
</body>

</html>