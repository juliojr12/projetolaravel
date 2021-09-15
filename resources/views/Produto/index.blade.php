<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index de produto</title>
</head>
<body>
  
  <div class='container'>
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($produtos_com_tipo as $produto_com_tipo)
      <tr>
        <th>
          {{$produto_com_tipo->id}} 
        </th>
        <td>
          {{$produto_com_tipo->nome}}
        </td>
        <td>
            {{$produto_com_tipo->preco}}
          </td>
          <td>
            {{$produto_com_tipo->descricao}}
          </td>
        <td>
          <a href="#"  class="btn btn-secondary">Editar</a>
          <a href={{route('produto.show', $produto_com_tipo->id)}}  class="btn btn-primary">Mostrar</a>
          <a href="#" class="btn btn-danger">Remover</a>
        </td>
        
      </tr>  
    @endforeach

  </tbody>
</table>
<a href="" class="btn btn-primary">Voltar</a>
<a href="{{route('produto.create')}}" class="btn btn-primary">Cadastrar</a>
  </div>
   

     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>