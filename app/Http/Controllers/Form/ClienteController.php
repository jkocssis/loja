<?php

namespace App\Http\Controllers\Form;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $objCliente;

    public function __construct()
    {
        $this->objCliente = new Cliente();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = $this->objCliente->all();
        return view('listAllClientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = $this->objCliente->create([
        	'cpf' => $request->cpf,
        	'nome' => $request->nome,        
        	'endereco' => $request->endereco,  
        	'cidade' => $request->cidade,
        	'cep' => $request->cep,
        	'uf' => $request->uf,
        	'tel_ddd' => $request->tel_ddd,  
        	'tel_num' => $request->tel_num,  
        	'lim_cred' => $request->lim_cred,  
        	'lim_disp' => $request->lim_disp,  
        ]);
        if($cadastro)
        {
            return redirect()->route('clientes.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('listCliente', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('editCliente', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->cpf = $request->cpf;
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;  
        $cliente->cidade = $request->cidade;  
        $cliente->cep = $request->cep;  
        $cliente->uf = $request->uf;  
        $cliente->tel_ddd = $request->tel_ddd;  
        $cliente->tel_num = $request->tel_num;  
        $cliente->lim_cred = $request->lim_cred;  
        $cliente->lim_disp = $request->lim_disp;       
        $cliente->save();  
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();  
        return redirect()->route('clientes.index');
    }
}
