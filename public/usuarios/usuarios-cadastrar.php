<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$stmt = mysqli_prepare(
    $conexao,

"INSERT INTO usuario (nome,email,senha) VALUES (?, ?, ?)"
);

mysqli_stmt_bind_param($stmt, "ssi", $nome, $email, $senha);

mysqli_stmt_execute($stmt);


header("Location: ../index.php");
?>