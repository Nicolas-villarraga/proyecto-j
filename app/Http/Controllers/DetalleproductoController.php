<?php

namespace App\Http\Controllers;

use App\Models\Detalleproducto;
use Illuminate\Http\Request;

class DetalleproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleproducto['detalleproductos']=Detalleproducto::paginate(5);
        return view('detalleproductos.index',$detalleproducto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('detalleproductos.create');
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
            'nombreproducto'=>'required|string|max:100',
            'descripcionproducto'=>'required|string|max:50',
            'cantidadproducto'=>'required|',
            'valorproducto'=>'required|',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $detalleproducto = request()->except('_token');
        Detalleproducto::insert($detalleproducto);
        //return response()->json($cita);

        return redirect('detalleproductos')->with('mensaje','detalle creado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalleproducto  $detalleproducto
     * @return \Illuminate\Http\Response
     */
    public function show(Detalleproducto $detalleproducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalleproducto  $detalleproducto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $detalleproducto = Detalleproducto::findOrFail($id);
        return view('detalleproductos.edit',compact('detalleproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalleproducto  $detalleproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombreproducto'=>'required|string|max:100',
            'descripcionproducto'=>'required|string|max:50',
            'cantidadproducto'=>'required|',
            'valorproducto'=>'required|',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $detalleproducto = request()->except(['_token','_method']);
        Detalleproducto::where('id','=',$id)->update($detalleproducto);

        $detalleproducto = Detalleproducto::findOrFail($id);
        //return view('citas.edit',compact('cita'));
        return redirect('detalleproductos')->with('mensaje','detalle Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalleproducto  $detalleproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Detalleproducto::destroy($id);
        return redirect('detalleproductos')->with('mensaje','detalle eliminado');
    }
}
