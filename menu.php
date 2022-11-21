<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gerenciar Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">

        #tamanhoContainer {
            width: 500px;
        }
    </style>


</head>
<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4>Cadastro</h4>
    <form action="_inserir_cliente.php" method="post" style="margin-top: 20px">
        <div class="form-group">
        <label for=>Nome do cliente</label>
        <input type= "text" class="form-control" name="nomedocliente" required> 
  
    </div>
    <div class="form-group">
        <label for=>Data de nascimento</label>
        <input type= "text" class="form-control" name="data_nasc" required> 
  
    </div>
    <div class="form-group">
        <label for=>CPF</label>
        <input type= "text" class="form-control" name="cpf" required> 
  
    </div>
    <div class="form-group">
        <label for=>RG</label>
        <input type= "text" class="form-control" name="rg" required> 
  
    </div>
    <div class="form-group">
        <label for=>Telefone</label>
        <input type= "text" class="form-control" name="telefone" required> 
  
    </div>
    <div class="form-group">
        <label for=>Endereco</label>
        <input type= "text" class="form-control" name="endereco"required> 
  
    </div>
    <div style="text-align: right;">
    <button type="submit" class="btn btn-success btn sm">Cadastrar</button>
    </div>
</form>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>