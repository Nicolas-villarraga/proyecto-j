<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detalles['detalles']=Detalle::paginate(5);
        return view('detalles.index',$detalles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos=Producto::all();
        $pedidos=Pedido::all();
        return view('detalles.create',compact('productos','pedidos'));
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
            'nombreproducto'=>'required|string|max:50',
            'descripcionproducto'=>'required|date',
            'cantidadproducto'=>'required|',
            'valorproducto'=>'required|',  
            'id_Producto'=>'required|string',
            'id_Pedido'=>'required|string',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $detalles = request()->except('_token');
        Detalle::insert($detalles);

        return redirect('detalles')->with('mensaje','detalle creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle $detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalles = Detalle::findOrFail($id);
        $productos=Producto::all();
        $pedidos=Pedido::all();
        return view('detalles.edit',compact('detalles','productos','pedidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombreproducto'=>'required|string|max:50',
            'descripcionproducto'=>'required|date',
            'cantidadproducto'=>'required|',
            'valorproducto'=>'required|',  
            'id_Producto'=>'required|string',
            'id_Pedido'=>'required|string',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $detalles = request()->except(['_token','_method']);
        Detalle::where('id','=',$id)->update($detalles);

        $detalle = Detalle::findOrFail($id);
        return redirect('detalles')->with('mensaje','Detalle Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detalle::destroy($id);
        return redirect('detalles')->with('mensaje','Detalle eliminado');
    }
}
