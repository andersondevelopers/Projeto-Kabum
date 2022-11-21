<?php


include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id_clientes = $id;
$deletar = mysqli_query($conexao,$sql)
?>

<div class="container" style="width: 400px">
<h3>Deletado com sucesso</h3>
<div style="margin-top: 10px">
    <a href="_listar_clientes.php" class="btn btn-sm btn-warning">Voltar</a>
  </div>
</center>



</div>