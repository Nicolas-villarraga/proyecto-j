<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;

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
        $datos['productos']=producto::paginate(5);
        return view('productos.index',$datos );
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
        //$datosProducto = request()->all(); 
        $datosProducto = request()->except('_token');

        if ($request->hasFile('fotoproducto')) {
            $datosProducto['fotoproducto'] = $request->file('fotoproducto')->store('uploads', 'public');
        }


        Producto::insert($datosProducto);

        //return response()->json($datosProducto);
        return redirect('productos')->with('mensaje', 'Producto agregado con èxito');

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
        $producto=Producto::findOrfail($id);
        return view('productos.edit', compact('producto') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto = request()->except(['_token','_method']); 

        if($request->hasFile('fotoproducto')) {
            $producto=Producto::findOrfail($id);
             
            Storage::delete('public/'.$producto->fotoproducto);

            $datosProducto['fotoproducto']=$request->file('fotoproducto')->store('uploads','public');
        }


        Producto::where('id','=',$id)->update($datosProducto);
        $producto=Producto::findOrfail($id);
        return view('productos.edit', compact('producto') );
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

        $producto=Producto::findOrfail($id);

        if(Storage::delete('public/'.$producto->fotoproducto)){
            
            Producto::destroy($id);    

        }

        
        return redirect('productos')->with('mensaje','Producto borrado');
    }
}
