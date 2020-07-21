<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\itemPedido;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;

class itemPedidoController extends Controller
{
    private $objPedido;
    private $objitemPedido;
    private $objProduto;

    public function __construct()
    {
        $this->objPedido = new Pedido();
        $this->objitemPedido = new itemPedido();
        $this->objProduto = new Produto();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item_pedidos = $this->objitemPedido->all();
        //dd($item_pedidos->find(1)->relProduto);
        return view('listAllitemPedidos', compact('item_pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = $this->objPedido->all();
        $produtos = $this->objProduto->all();
        return view('newitemPedido', compact('pedidos', 'produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = $this->objitemPedido->create([
            'idPedido' => $request->idPedido,
            'idProduto' => $request->idProduto,
            'quant_vend' => $request->quant_vend,
        ]);
        //NAO FUNCIONA ATUALIZAR QUANTIDADE DE PRODUTO DISPONIVEL;
        //$produto = $this->objProduto->find($quant_disp);
        //$venda = $request->quant_vend;
        ///$res = $produto - $venda;

        //$this->objProduto->where(['idProduto' => $idProduto])->update([            
        //    'quant_disp' => $res,
        //]);
        //$produto->save();
        if($cadastro)
        {
            return redirect()->route('itens_pedidos.index');
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\itemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function show(itemPedido $itemPedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\itemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function edit(itemPedido $itemPedido)
    {     
        return view('edititemPedido', [
            'itemPedido' => $itemPedido
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\itemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, itemPedido $itemPedido)
    {
        //NAO FUNCIONA: 

        //$itemPedido->idPedido = $request->idPedido;
        //$itemPedido->idProduto = $request->idProduto;
        //$itemPedido->quant_vend = $request->quant_vend;       
        //$itemPedido->save();  
        //return redirect()->route('itens_pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\itemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemPedido $itemPedido)
    {      
        //NAO FUNCIONA:  

        //$itemPedido->delete();  
        //$del = $this->$objitemPedido->destroy($itemPedido);
        //return redirect()->route('itens_pedidos.index');
        //return ($del)?"Sim":"Nao";        
    }
}
