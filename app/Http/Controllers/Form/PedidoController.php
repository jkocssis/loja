<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\itemPedido;
use App\Models\Cliente;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    private $objPedido;
    private $objitemPedido;
    private $objCliente;
    private $objVendedor;

    public function __construct()
    {
        $this->objPedido = new Pedido();
        $this->objitemPedido = new itemPedido();
        $this->objCliente = new Cliente();
        $this->objVendedor = new Vendedor();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = $this->objPedido->all()->sortBy('idPedido');
        //dd($pedidos->find(1)->relVendedor);
        return view('listAllPedidos', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = $this->objCliente->all();
        $vendedores = $this->objVendedor->all();
        return view('newPedido', compact('clientes', 'vendedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = $this->objPedido->create([
            'idCliente' => $request->idCliente,
            'idVendedor' => $request->idVendedor,
            'status' => $request->status,
        ]);
        if($cadastro)
        {
            return redirect()->route('pedidos.index');
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($idPedido)
    {
        $pedido = $this->objPedido->find($idPedido);
        return view('listPedido', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('editPedido', [
            'pedido' => $pedido
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->idCliente = $request->idCliente;
        $pedido->idVendedor = $request->idVendedor;         
        $pedido->status = $request->status;  
        $pedido->save(); 
        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();  
        return redirect()->route('pedidos.index');
    }
}
