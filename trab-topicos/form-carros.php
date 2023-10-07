<?php 
$carro = null;
if (isset($_GET['id_carro'])) {
    $id_carro = $_GET['id_carro'];
    require_once "conexao.php";
    $conexao = conectar();
    $sql = "SELECT * FROM carros WHERE id_carro = $id_carro";
    $resultado = mysqli_query($conexao, $sql);
    $carro = mysqli_fetch_assoc($resultado);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br><br>
<h3 class="text-center">Cadastro carro</h3>
<form class="row g-3" method="post" action="cadastrar-carro.php">
  <div class="col-md-6">
      <input type="hidden" name="id_carro" value="<?= ($carro == null) ? '' : $carro['id_carro'] ?>">
    <label for="inputEmail4" class="form-label">cor</label>
    <input type="text" class="form-control" id="" name="cor" value="<?= ($carro == null) ? '' : $carro['cor'] ?>">
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputPassword4" name="nome" value="<?= ($carro == null) ? '' : $carro['nome'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Marca</label>
    <input type="text" class="form-control" id="inputPassword4" name="marca" value="<?= ($carro == null) ? '' : $carro['marca'] ?>">    
</div>
<div class="col-md-12">
    <input type="submit" class="btn btn-success">
</div>
</form>
</body>
</html>
