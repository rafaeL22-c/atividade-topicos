<?php
$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$idade= $_POST['idade'];
$sobrenome= $_POST['sobrenome'];
if ($id_pessoa ==""){ 
    $sql = "INSERT INTO  pessoa(nome,idade,sobrenome) 
    values('$nome','$idade','$sobrenome')";




 }else {
    $sql = "UPDATE pessoas set 

                                    nome='$nome',   
                                    idade='$marca',
                                    sobrenome='$sobrenome'
                                    where id_pessoa = $id_pessoa ";   
 }

require_once "conexao.php";
$conexao = conectar();
$resultado =  mysqli_query($conexao,$sql);
if($resultado){
    echo "pagamento salvo com sucesso"; 
    header("location:index-pessoa.php");
} else {
    echo mysqli_error($conexao);
}
?>