<?php

include 'conexao.php';

$id = $_POST['id'];
$nomedocliente = $_POST['nomedocliente'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


$sql = UPDATE `clientes` SET `data_nasc`='$data_nasc',`cpf`='$cpf',`rg`='$rg',`telefone`='$telefone',`endereco`='$endereco' WHERE id_clientes = $id";

$atulizar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style=" magin-top: 10px">
            <a href="_listar_clientes.php" class="btn-sm btn-warning">Voltar</a>
        </div>
    <center>        