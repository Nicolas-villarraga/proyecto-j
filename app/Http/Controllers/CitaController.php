<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Especialidad;
use App\Models\Estado;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cita['citas']=Cita::paginate(5);
        return view('citas.index',$cita);
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
        $especialistas=Especialidad::all();
        $pacientes= Paciente::all();
        $estados= Estado::all();
        return view('citas.create',compact('doctores','especialistas','pacientes','estados'));

        
       
      
        
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
            'id_Doctor'=>'required|string|max:50',
            'fecha'=>'required|date',
            'hora'=>'required|',  
            'id_Especialidad'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $cita = request()->except('_token');
        Cita::insert($cita);

        return redirect('citas')->with('mensaje','Cita creada con exito'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);
        return view('citas.show',compact('cita'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        $doctores=Doctor::all();
        $especialistas=Especialidad::all();
        $pacientes= Paciente::all();
        $estados= Estado::all();
        return view('citas.edit',compact('cita','doctores','especialistas','pacientes','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
            'id_Doctor'=>'required|string|max:50',
            'fecha'=>'required|date',
            'hora'=>'required|string',
            'id_Especialidad'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $cita = request()->except(['_token','_method']);
        Cita::where('id','=',$id)->update($cita);

        $cita = Cita::findOrFail($id);
        //return view('citas.edit',compact('cita'));
        return redirect('citas')->with('mensaje','cita Modificada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cita::destroy($id);
        return redirect('citas')->with('mensaje','cita cancelada');
    }
}
