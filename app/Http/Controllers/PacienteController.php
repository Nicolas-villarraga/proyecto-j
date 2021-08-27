<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paciente['pacientes']=Paciente::paginate(5);
        return view('pacientes.index',$paciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes.create');
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
            'nombrepaciente'=>'required|string|max:100',
            'apellidopaciente'=>'required|string|max:100',
            'tipodocumento'=>'required|string|max:100',
            'documentopaciente'=>'required|string|max:100',
            'correopaciente'=>'required|string|max:100',
            'telefonopaciente'=>'required|string|max:100',
            'acudientepaciente'=>'required|string|max:100',
            'estado'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $paciente = request()->except('_token');
        Paciente::insert($paciente);

        return redirect('pacientes')->with('mensaje','Paciente creado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombrepaciente'=>'required|string|max:100',
            'apellidopaciente'=>'required|string|max:100',
            'tipodocumento'=>'required|string|max:100',
            'documentopaciente'=>'required|string|max:100',
            'correopaciente'=>'required|string|max:100',
            'telefonopaciente'=>'required|string|max:100',
            'acudientepaciente'=>'required|string|max:100',
            'estado'=>'required|string|max:100', 
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $paciente = request()->except(['_token','_method']);
        Paciente::where('id','=',$id)->update($paciente);

        $paciente = Paciente::findOrFail($id);
        return redirect('pacientes')->with('mensaje','paciente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Paciente::destroy($id);
        return redirect('pacientes')->with('mensaje','paciente eliminado');
    }
}
