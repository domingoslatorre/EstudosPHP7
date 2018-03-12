<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <style>
        form * {
            display: block;
        }
    </style>
    <title>Formulário de Cadastro Aluno</title>
</head>

<body>
    <form action="Ex06.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <label for="endereco">Endereço</label>
        <textarea name="endereco" id="endereco"></textarea>
        <label for="sexo">Sexo</label>
        <input type="radio" name="sexo" value="M" checked>Masculino
        <input type="radio" name="sexo" value="F">Feminino
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>