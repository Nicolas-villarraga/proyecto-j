<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedido['pedidos']=Pedido::paginate(5);
        return view('pedidos.index',$pedido);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'fecha'=>'required|date|max:100',
            'hora'=>'required',
            'totalpedido'=>'required',
            'observacionespedido'=>'required|string|max:100',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $pedido = request()->except('_token');
        Pedido::insert($pedido);
        return redirect('pedidos')->with('mensaje','Pedido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit',compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'fecha'=>'required|date|max:100',
            'hora'=>'required',
            'totalpedido'=>'required',
            'observacionespedido'=>'required|string|max:100',    
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $pedido = request()->except(['_token','_method']);
        Pedido::where('id','=',$id)->update($pedido);

        $pedido = Pedido::findOrFail($id);
        return redirect('pedidos')->with('mensaje','Pedido Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pedido::destroy($id);
        return redirect('pedidos')->with('mensaje','Pedido cancelado');
    }
}
