<?php

namespace App\Http\Controllers\Form;

use App\Models\Vendedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    private $objVendedor;

    public function __construct()
    {
        $this->objVendedor = new Vendedor();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = $this->objVendedor->all();
        return view('listAllVendedores', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newVendedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = $this->objVendedor->create([
        	'cpf' => $request->cpf,
        	'nome' => $request->nome,        
        	'endereco' => $request->endereco,  
        	'cidade' => $request->cidade,
        	'cep' => $request->cep,
        	'uf' => $request->uf,
        	'tel_ddd' => $request->tel_ddd,  
        	'tel_num' => $request->tel_num,  
        	'sal_base' => $request->sal_base,  
        	'taxa_com' => $request->taxa_com,  
        ]);
        if($cadastro)
        {
            return redirect()->route('vendedores.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedor $vendedor)
    {
        return view('listVendedor', [
            'vendedor' => $vendedor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendedor $vendedor)
    {
        return view('editVendedor', [
            'vendedor' => $vendedor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendedor $vendedor)
    {
        $vendedor->cpf = $request->cpf;
        $vendedor->nome = $request->nome;         
        $vendedor->endereco = $request->endereco;  
        $vendedor->cidade = $request->cidade;  
        $vendedor->cep = $request->cep;  
        $vendedor->uf = $request->uf;  
        $vendedor->tel_ddd = $request->tel_ddd;  
        $vendedor->tel_num = $request->tel_num;  
        $vendedor->sal_base = $request->sal_base;  
        $vendedor->taxa_com = $request->taxa_com;      
        $vendedor->save();  
        return redirect()->route('vendedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendedor $vendedor)
    {
        $vendedor->delete();  
        return redirect()->route('vendedores.index');
    }
}
