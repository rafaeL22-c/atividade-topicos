<?php
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * from pessoa";
$resultado = mysqli_query($conexao,$sql);



?>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 class="text-center">Gerenciamento administrativo</h1><br><br>

<div class="table-responsive col-sm-12">
            <h3 class="text-center ">Pessoas</h3>  
            <a href="form-pessoa.php" class="btn btn-success">cadastrar pessoa</a>  
            <table class="table table-hover  table-bordered "> <!-- tabela -->
            <thead class="table-dark text-center"> <!--cabecalho-->
            <tr> <!--linha-->
        <th class="cabeca">Nome </th>
        <th>Idade </th>
        <th>Sobrenome</th>
        <th colspan="1">Ver mais</th>
    </tr>
</thead>
<?php while ($dados = mysqli_fetch_assoc($resultado)) :?>
<tbody class="text-center">
        <td><?php  echo $dados['nome'] ?></td>
        <td> <?php  echo $dados['idade'] ?> </td>
        <td> <?php  echo $dados['sobrenome'] ?></td>
      
        <td><a href='form-pessoa.php?id_pessoa=<?php echo $dados['id_pessoa']; ?>'>acessar detalhes</a></td>       
            </tbody>
            <?php endwhile ?>
        </table>
</div>

 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>