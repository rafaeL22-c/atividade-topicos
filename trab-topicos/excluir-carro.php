<?php
$id_carro = $_GET['id_carro'];
require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE * FROM carros WHERE id_carro = $id_carro";
$resultado = mysqli_query($conexao,$sql);
if ($resultado == true) {
    echo "carro excluido com sucesso !";
}else{
    echo "o progamador é paia he he he he";
}
?>