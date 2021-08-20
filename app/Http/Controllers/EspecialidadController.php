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
        return view('especialiad.index',$especialiad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('especialidad.create');
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
            'idespecialiad'=>'required|string|max:100',
            'nombreespecialidad'=>'required|string|max:100',
              
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $especialidad = request()->except('_token');
        Especialidad::insert($especialidad);
        //return response()->json($especialiad);

        return redirect('especialidads')->with('mensaje','Especialidad creada con exito'); 

        
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function show(Especialidad $especialidad)
    {
        //
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
        $especialiad = Especialiad::findOrFail($id);
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
            'idespecialiad'=>'required|string|max:100',
            'nombreespecialidad'=>'required|string|max:100',
           
        ];
        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $especialidad = request()->except(['_token','_method']);
        Especialidad::where('id','=',$id)->update($especialiad);

        $especialidad = Especialidad::findOrFail($id);
        //return view('especialidads.edit',compact('especialidad'));
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
        //Especialidad::destroy($id);
        return redirect('especialidads')->with('mensaje','Especialidad eliminada');
    }
}
?>