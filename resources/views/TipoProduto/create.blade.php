<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create de Tipo de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form method="POST" action="/tipoproduto">
            @csrf
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="#" disabled>
            <div id="emailHelp" class="form-text">O ID não precisa se iformado, pois é criado automaticamente</div>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="txt" name="descricao" class="form-control" id="exampleInputPassword1" placeholder="Digite a descrição do Tipo de Produto">
            </div>
            
            <a href="/tipoproduto"class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div> 

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>