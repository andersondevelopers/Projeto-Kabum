<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div class="container" style="margin-top: 40px">
<h3>Lista de clientes</h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome do cliente</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">CPF</th>
            <th scope="col">RG</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereco</th>
            <th scope="col">Ação</th>
        </tr>    
    </thead>
        <tr>
            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM clientes";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $id_clientes = $array['id_clientes'];
                    $nomedocliente = $array['nomedocliente'];
                    $data_nasc = $array['data_nasc'];
                    $cpf = $array['cpf'];
                    $rg = $array['rg'];
                    $telefone = $array['telefone'];
                    $endereco = $array['endereco'];
                    ?>
                <tr>
                    <td><?php echo $nomedocliente ?></td>

                    <td><?php echo $data_nasc ?></td>

                    <td><?php echo $cpf ?></td>

                    <td><?php echo $rg ?></td>

                    <td><?php echo $telefone ?></td>

                    <td><?php echo $endereco ?></td>
                    <td><a class="btn btn-warning btn-sm" href="_editar_clente.php?id=<?php echo $id_clientes ?>" role="button">Editar</a>
                    <a class="btn btn-danger btn-sm" href="_editar_clente.php?id=<?php echo $id_clientes ?>" role="button">Excluir</a>
                    </td>
                </tr>    
          
            <?php } ?>
        
    
</table>        
                   

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>