<?php
include "infra/conexao.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <main>

        <!-- CADASTRO E LISTA DE USUÁRIOS -->

        <div>
            <h2>Adicione um novo Usuário!</h2>
            <form action="public/usuarios-cadastrar.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
                <br>
                <label for="email">Email:</label>
                <input type="text" name="email">
                <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha">
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>

        <div>
            <h2>Usuários Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
            </table>
        </div>

        <!-- CADASTRO E LISTA DE PRATOS -->

        <div>
            <h2>Adicione um novo Prato!</h2>
            <form action="public/usuarios-cadastrar.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
                <br>
                <label for="email">Email:</label>
                <input type="text" name="email">
                <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha">
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>

        <div>
            <h2>Pratos Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
            </table>
        </div>
    </main>
</body>

</html>