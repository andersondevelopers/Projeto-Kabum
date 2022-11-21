<?php

include 'conexao.php';


$nomedocliente = $_POST['nomedocliente'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


 $sql = "INSERT INTO clientes (nomedocliente, data_nasc, cpf, rg, telefone, endereco) VALUES ('$nomedocliente','$data_nasc','$cpf','$rg','$telefone', '$endereco')";
 $inserir = mysqli_query($conexao,$sql);




?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container" style="width: 300px">
<center>
<h4>Cadastrado com sucesso</h4>
</center>
<div style="padding-top: 20px">
    <center>
    <a href="menu.php" role="button" class="btn btn-sm btn-primary">Novo cliente</a>
  </center>
  </div>

</div>


