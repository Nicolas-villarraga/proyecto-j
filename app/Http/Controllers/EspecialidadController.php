<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $especialidad['especialidads']=Especialidad::paginate(5);
        return view('especialidads.index',$especialidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('especialidads.create');
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
            'nombreespecialidad'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $especialidad = request()->except('_token');
        Especialidad::insert($especialidad);
      
        return redirect('especialidads')->with('mensaje','Especialidad creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidad=Especialidad::find($id);
        return view('especialidads.show',compact('especialidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $especialidad = Especialidad::findOrFail($id);
        return view('especialidads.edit',compact('especialidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombreespecialidad'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $especialidad = request()->except(['_token','_method']);
        Especialidad::where('id_Especialidad','=',$id)->update($especialidad);

        $especialidad = Especialidad::findOrFail($id);
        return redirect('especialidads')->with('mensaje','Especialidad Modificada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Especialidad::destroy($id);
        return redirect('especialidads')->with('mensaje','Especialidad Eliminada');
    }
}
