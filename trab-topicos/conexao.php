<?php
function conectar()
{
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "atividade-topicos";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conexao) {
        return $conexao;
    } else {
        echo "erro ao conectar a base dedos" .
            mysqli_connect_error();
    }
}