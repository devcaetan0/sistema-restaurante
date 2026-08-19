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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratos/title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Pratos</h1>
    </header>
    <main>

<div>
            <h2>Editando o Prato!</h2>
            <form action="public/usuarios-cadastrar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $pratos["id"]?>">

                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $pratos["nome"]?>">
                <br>
                <label for="email">Descrição:</label>
                <input type="text" name="descricao" value="<?php echo $pratos["descricao"]?>">>
                <br>
                <label for="senha">Preço:</label>
                <input type="password" name="preco" value="<?php echo $pratos["preco"]?>">>
                <br>
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" value="<?php echo $categoria["categoria"]?>">>
                <br>

                <label for="id_usuario">Cadastrado por:</label>
                <select name="id_usuario">
                    <option value="0">Selecione</option>
                </select>
                <br>

                <button type="submit">Atualizar</button>
            </form>
        </div>

</main>

</body>

</html>