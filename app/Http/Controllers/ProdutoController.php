<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *Mostra a lista de td produto cadastrado
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        // var_dump($tipoProdutos);
        return view('Produto/index')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     *mostra form de criação de produtos
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Produto/create');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
