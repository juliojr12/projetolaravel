<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    {{-- <?= var_dump($tiposProduto) ?> --}}
    <div class="container">
        <form method="post" action="{{route('produto.update', $produto->id)}}">
            <input name="_method" type="hidden" value="PUT">
            @csrf
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder={{$produto->id}} disabled>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input type="txt" name="nome" class="form-control" id="id-input-name" placeholder="Digite o nome" value={{$produto->nome}}>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço</label>
                <input type="txt" name="preco" class="form-control" id="id-input-preco" placeholder="Digite o Preço" value={{$produto->preco}} >
                </div>
            <div class="mb-3">
                <label for="id-input-tipo">Tipo</label>
                <select id="id-input-tipo" class="form-select" name="Tipo_Produtos_id"  aria-label="Default select example">
                    @foreach ($tiposProduto as $item)
                    @if ($produto->descricao == $item->descricao)
                    <option value={{$item->id}} selected>{{$item->descricao}}</option>
                    
                        
                    @else
                    <option value={{$item->id}}>{{$item->descricao}}</option>
                    
                    @endif
                    
                    @endforeach
                  </select>  
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
            <a href="" type="submit" class="btn btn-primary">Enviar</a>
        </form>
    </div> 

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>