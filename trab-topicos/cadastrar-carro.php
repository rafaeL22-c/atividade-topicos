<?php
$id_carro = $_POST['id_carro'];
$nome = $_POST['nome'];
$marca= $_POST['marca'];
$cor= $_POST['cor'];
if ($id_carro ==""){ 
    $sql = "INSERT INTO  carros(nome,marca,cor) 
    values('$nome','$marca','$cor')";




 }else {
    $sql = "UPDATE carros set 

                                    nome='$nome',   
                                    marca='$marca',
                                    cor='$cor'
                                    where id_carro = $id_carro ";   
 }

require_once "conexao.php";
$conexao = conectar();
$resultado =  mysqli_query($conexao,$sql);
if($resultado){
    echo "pagamento salvo com sucesso"; 
    header("location:index1.php");
} else {
    echo mysqli_error($conexao);
}
?>