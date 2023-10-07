<?php
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * from carros";
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
  <style>
    .k9{
       height: 800px;    
}
.im{
    height: 100%;
    object-fit: cover;
    filter: brightness(0.4);

}
#carro {
    max-width: 100%; /* Defina o tamanho máximo desejado para o carrossel */
    margin: 0 auto; /* Centralize o carrossel horizontalmente */
  }
  .card-container {
  display: flex;
  justify-content: center;
}

.card {
  margin-left: 30px;
  width: calc(33.33% - 10px);
  background-color: #f0f0f0;
  padding: 10px;
  box-sizing: border-box;
  margin-right: 10px;
}

  
  </style>

<nav class="navbar navbar-expand-lg bg-black fixed-top" >
  <div class="container-fluid">
    <a class="navbar-brand active text-white" href="#">Concessionária rpc</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link  m-2 text-white" aria-current="page" href="form-carros.php">cadastrar carro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-2 text-white" href="#">contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php include_once("carrousel.php") ?><br>
<h1 class="text-center">Gerenciamento administrativo</h1><br><br>

<div class="table-responsive col-sm-12">
            <h3 class="text-center ">Carros</h3>    
            <table class="table table-hover  table-bordered "> <!-- tabela -->
            <thead class="table-dark text-center"> <!--cabecalho-->
            <tr> <!--linha-->
        <th class="cabeca">Nome do carro</th>
        <th>Marca </th>
        <th>Cor</th>
        <th colspan="1">Ver mais</th>
    </tr>
</thead>
<?php while ($dados = mysqli_fetch_assoc($resultado)) :?>
<tbody class="text-center">
        <td><?php  echo $dados['nome'] ?></td>
        <td> <?php  echo $dados['marca'] ?> </td>
        <td> <?php  echo $dados['cor'] ?></td>
      
        <td><a href='form-carros.php?id_carro=<?php echo $dados['id_carro']; ?>'>acessar detalhes</a></td>       
            </tbody>
            <?php endwhile ?>
        </table>
</div>

 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>