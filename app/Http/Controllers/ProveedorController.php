<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedor['proveedors']=Proveedor::paginate(5);
        return view('proveedors.index',$proveedor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedors.create');
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
            'nitproveedor'=>'required',
            'direccionproveedor'=>'required',
            'telefonoproveedor'=>'required',
            'correoproveedor'=>'required|string|max:100',
            'marcaproveedor'=>'required|string|max:100',
            'nombreproveedor'=>'required|string|max:100',

        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $proveedor = request()->except('_token');
        Proveedor::insert($proveedor);
        return redirect('proveedors')->with('mensaje','proveedor creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=Proveedor::find($id);
        return view('proveedors.show',compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedors.edit',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nitproveedor'=>'required',
            'direccionproveedor'=>'required',
            'telefonoproveedor'=>'required',
            'correoproveedor'=>'required|string|max:100',
            'marcaproveedor'=>'required|string|max:100',
            'nombreproveedor'=>'required|string|max:100',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $proveedor = request()->except(['_token','_method']);
        Proveedor::where('id','=',$id)->update($proveedor);

        $proveedor = Proveedor::findOrFail($id);
        return redirect('proveedors')->with('mensaje','Proveedor Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proveedor::destroy($id);
        return redirect('proveedors')->with('mensaje','proveedor eliminado');
    }
}
