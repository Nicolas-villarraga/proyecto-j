<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;

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
        $datos['proveedores']=proveedor::paginate(5);
        return view('proveedores.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedores.create');
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
        //$datosProveedor = request()->all(); 
        $datosProveedor = request()->except('_token'); 
        
        Proveedor::insert($datosProveedor);

        //return response()->json($datosProveedor);
         return redirect('proveedores')->with('mensaje','Proveedor agregado con èxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
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
        $proveedor=Proveedor::findOrfail($id);
        return view('proveedores.edit', compact('proveedor') );
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
        $datosProveedor = request()->except(['_token','_method']); 
        Proveedor::where('id','=',$id)->update($datosProveedor);
        $proveedor=Proveedor::findOrfail($id);
        return view('Proveedores.edit', compact('proveedor') );
       
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
            return redirect('proveedores')->with('mensaje','Proveedor borrado');
    }

    
}
