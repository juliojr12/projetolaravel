<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index de tipo produto</title>
</head>
<body>
  
  <div class='container'>
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($tipoProdutos as $tipoProduto)
      <tr>
        <th>
          {{$tipoProduto->id}} 
        </th>
        <td>
          {{$tipoProduto->descricao}}
        </td>
        <td>
          <button class="btn btn-secondary">Editar</button>
          <button class="btn btn-primary">Mostrar</button>
          <button class="btn btn-danger">Remover</button>
        </td>
        
      </tr>  
    @endforeach

  </tbody>
</table>
<a href="" class="btn btn-primary">Voltar</a>
<a href="tipoproduto/create" class="btn btn-primary">Cadastrar</a>
  </div>
   

     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>