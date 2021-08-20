<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto['productos']=Producto::paginate(5);
        return view('productos.index',$producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
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
            'preciocompra'=>'required',
            'precioventa'=>'required',
            'cantidadproducto'=>'required',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $producto = request()->except('_token');
        Producto::insert($producto);
        return redirect('productos')->with('mensaje','producto creado con exito');
        
        
         

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'nombreproducto'=>'required|string|max:100',
            'descripcionproducto'=>'required|string|max:50',
            'preciocompra'=>'required',
            'precioventa'=>'required',
            'cantidadproducto'=>'required', 
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $producto = request()->except(['_token','_method']);
        Producto::where('id','=',$id)->update($producto);

        $producto = Producto::findOrFail($id);
        return redirect('productos')->with('mensaje','Producto Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return redirect('productos')->with('mensaje','producto eleminado');
    }
}
