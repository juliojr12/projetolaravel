<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    {{-- <?= var_dump($tiposProduto) ?> --}}
    <div class="container">
        <form method="POST" action="{{route('produto.store')}}">
            @csrf
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder={{$produto->id}} disabled>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input type="txt" name="nome" class="form-control" id="id-input-name" placeholder={{$produto->nome}} disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço</label>
                <input type="txt" name="preco" class="form-control" id="id-input-preco" placeholder={{$produto->preco}} disabled>
                </div>
            <div class="mb-3">
                <label for="id-input-tipo">Tipo</label>
                <input type="txt" name="Tipo" class="form-control" id="id-input-tipo" placeholder={{$produto->descricao}} disabled>
            </div>  

                <div class="mb-3">
                    <label for="id-input-update-at">Update at</label>
                    <input type="txt" name="Update-at" class="form-control" id="id-input-update-at" placeholder={{$produto->updated_at}} disabled>
                </div>  

                <div class="mb-3">
                    <label for="id-input-creat-at">Create at</label>
                    <input type="txt" name="Create-at" class="form-control" id="id-input-create-at" placeholder={{$produto->created_at}} disabled>
                </div>
                
            
            
            <a href="{{route('produto.index')}}"class="btn btn-primary">Voltar</a>
        </form>
    </div> 

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>