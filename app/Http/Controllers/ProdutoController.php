<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *Mostra a lista de td produto cadastrado
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos_com_tipo = DB::select('SELECT produtos.id, nome, preco, descricao FROM produtos JOIN tipo_produtos ON Tipo_Produtos_id = tipo_Produtos.id');
       // $produtos = Produto::all();
        // var_dump($tipoProdutos);
        return view('Produto/index')->with('produtos_com_tipo', $produtos_com_tipo);
    }

    /**
     * Show the form for creating a new resource.
     *mostra form de criação de produtos
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposProduto = DB::select('SELECT*FROM tipo_produtos');
        return view('Produto/create')->with('tiposProduto', $tiposProduto);
    }

    /**
     * Store a newly created resource in storage.
     *metodo utilizado para receber o post e cadastrar os produtos
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtoProduto = new Produto();
        $produtoProduto->nome = $request->nome;
        $produtoProduto->preco = $request->preco;
        $produtoProduto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
        $produtoProduto->save();
 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = DB::select('SELECT PRODUTOS.id,
                                    PRODUTOS.nome,
                                    PRODUTOS.preco,
                                    TIPO_PRODUTOS.descricao,
                                    PRODUTOS.updated_at,
                                    PRODUTOS.created_at
                               FROM  PRODUTOS
                               JOIN  TIPO_PRODUTOS  ON Tipo_produtos_id = TIPO_PRODUTOS.id

                                WHERE PRODUTOS.id = ?', [$id])[0];
        //error_log(print_r($produto));
        return view('Produto/show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = DB::select('SELECT PRODUTOS.id,
        PRODUTOS.nome,
        PRODUTOS.preco,
        TIPO_PRODUTOS.descricao,
        PRODUTOS.updated_at,
        PRODUTOS.created_at
   FROM  PRODUTOS
   JOIN  TIPO_PRODUTOS  ON Tipo_produtos_id = TIPO_PRODUTOS.id

    WHERE PRODUTOS.id = ?', [$id])[0];
        $tiposProduto = DB::select('SELECT*FROM tipo_produtos');
        return view('Produto/edit')->with('produto', $produto)->with('tiposProduto', $tiposProduto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
