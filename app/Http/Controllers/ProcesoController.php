<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Historiaclinica;
use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $procesos['procesos']=Proceso::paginate(5);
        return view('procesos.index',$procesos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $doctores=Doctor::all();
        $historiaclinicas=Historiaclinica::all();
        return view('procesos.create',compact('doctores','historiaclinicas'));
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
            'fechaproceso'=>'required|string|max:50',
            'observacionesdeproceso'=>'required',
            'id_Doctor'=>'required|string',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $procesos = request()->except('_token');
        Proceso::insert($procesos);

        return redirect('procesos')->with('mensaje','proceso creado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proceso=Proceso::find($id);
        return view('procesos.show',compact('proceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $procesos = Proceso::findOrFail($id);
        $doctores=Doctor::all();
        $historiaclinicas=Historiaclinica::all();
        return view('procesos.edit',compact('procesos','doctores','historiaclinicas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'fechaproceso'=>'required|string|max:50',
            'observacionesdeproceso'=>'required',
            'id_Doctor'=>'required|string',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $procesos = request()->except(['_token','_method']);
        Proceso::where('id','=',$id)->update($procesos);

        $procesos = Proceso::findOrFail($id);
        return redirect('procesos')->with('mensaje','proceso Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proceso::destroy($id);
        return redirect('procesos')->with('mensaje','proceso eliminado');
    }
}
