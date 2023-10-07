<?php 
$pessoa = null;
if (isset($_GET['id_pessoa'])) {
    $id_pessoa = $_GET['id_pessoa'];
    require_once "conexao.php";
    $conexao = conectar();
    $sql = "SELECT * FROM pessoa WHERE id_pessoa = $id_pessoa";
    $resultado = mysqli_query($conexao, $sql);
    $pessoa = mysqli_fetch_assoc($resultado);
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
<h3 class="text-center">Cadastro pessoa</h3>
<form class="row g-3" method="post" action="cadastrar-pessoa.php">
  <div class="col-md-6">
      <input type="hidden" name="id_pessoa" value="<?= ($pessoa == null) ? '' : $pessoa['id_pessoa'] ?>">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" id="" name="nome" value="<?= ($pessoa == null) ? '' : $pessoa['nome'] ?>">
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Idade</label>
    <input type="text" class="form-control" id="inputPassword4" name="idade" value="<?= ($pessoa == null) ? '' : $pessoa['idade'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="inputPassword4" name="sobrenome" value="<?= ($pessoa == null) ? '' : $pessoa['sobrenome'] ?>">    
</div>
<div class="col-md-12">
    <input type="submit" class="btn btn-success">
</div>
</form>
</body>
</html>
