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
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="#" disabled>
            <div id="id-help" class="form-text">O ID não precisa se informado, pois é criado automaticamente</div>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input type="txt" name="nome" class="form-control" id="id-input-name" placeholder="Digite a descrição do Tipo de Produto">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Preço</label>
                <input type="txt" name="preco" class="form-control" id="id-input-preco" placeholder="Digite a descrição do Tipo de Produto">
                </div>
            <div class="mb-3">
                <label for="id-input-tipo" class="form-label">Tipo</label>
                <select id="id-input-tipo" class="form-select" name="Tipo_Produtos_id"  aria-label="Default select example">
                    @foreach ($tiposProduto as $item)
                    <option value={{$item->id}}>{{$item->descricao}}</option>
                    @endforeach
                    {{-- <option value="1">Pizza</option>
                    <option value="2">Suco</option>
                    <option value="3">Cerveja</option>
                    <option value="4">Lasanha</option>
                    <option value="5">Café</option> --}}
                  </select>  
                </div>  
                
            
            
            <a href="{{route('produto.index')}}"class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div> 

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>