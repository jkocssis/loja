<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $objProduto;

    public function __construct()
    {
        $this->objProduto = new Produto();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = $this->objProduto->all();
        return view('listAllProdutos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newProduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = $this->objProduto;
        $produto->descricao = $request->descricao;
        $produto->quant_disp = $request->quant_disp;         
        $produto->preco_unit = $request->preco_unit;  
        $produto->estoque_min = $request->estoque_min;

        if($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $produto->image = $request->image->storeAs('images', $filename, 'public');
        }      
        
        $produto->save(); 
        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('listProduto', [
            'produto' => $produto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('editProduto', [
            'produto' => $produto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->descricao = $request->descricao;
        $produto->quant_disp = $request->quant_disp;         
        $produto->preco_unit = $request->preco_unit;  
        $produto->estoque_min = $request->estoque_min;  
        $produto->save(); 
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        Storage::delete('/public/' . $produto->image);
        $produto->delete();  
        return redirect()->route('produtos.index');
    }
}
