<?php
$id_pessoa = $_GET['id_pessoa'];
require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE * FROM pessoa WHERE id_pessoa = $id_pessoa";
$resultado = mysqli_query($conexao,$sql);
if ($resultado == true) {
    echo "carro excluido com sucesso !";
    header("location:index-pessoa.php");
}else{
    echo "o progamador é paia he he he he";
}
?>