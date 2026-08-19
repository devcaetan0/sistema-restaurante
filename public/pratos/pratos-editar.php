<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$stmt = mysqli_prepare(
    $conexao,

    "SELECT * FROM pratos WHERE id = ?"
);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$pratos =mysqli_fetch_assoc($resultado);

?>

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
                <button type="submit">Atualizar</button>
            </form>
        </div>