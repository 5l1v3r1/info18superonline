<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produtos;
use App\categoria;
class ProdutoControlador extends Controller
{
    public function index()
    {
        $produtos = produtos::all();
        return view('produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = categoria::all();
    
        return view('produto_cadastro', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $preco = $request->input('preco');
        $categoria = $request->input('categoria');

        $cat = new produtos();
        $cat->nome = $nome;
        $cat->preco = $preco;
        $cat->categoria_id = $categoria;
        $cat->save();

         
        
        return redirect('/produtos');

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
        $categoria = categoria::all();
        $produto = produtos::find($id);
        return view('produto_cadastro', compact('produto','categoria'));
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
         $cat = produtos::find($id);

         $nome = $request->input('nome');
        $preco = $request->input('preco');
        $categoria = $request->input('categoria');

        
        $cat->nome = $nome;
        $cat->preco = $preco;
        $cat->categoria_id = $categoria;
         $cat->save();

         return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = produto::find($id);
        $produto->delete();
        return redirect('/produtos');

    }
    public function listarprodutos()
    {
          $produtos = produtos::all();
        return view('pagina', compact('produtos'));

    }
}


