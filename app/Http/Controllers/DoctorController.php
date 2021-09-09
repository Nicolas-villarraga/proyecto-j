<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Especialidad;
use App\Models\Genero;
use App\Models\Rol;
use App\Models\Tipodocumento;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctor['doctors']=Doctor::paginate(5);
        return view('doctors.index',$doctor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $especialidades=Especialidad::all();
        $tipodocumentos=Tipodocumento::all();
        $generos=Genero::all();
        $rols=Rol::all();
        return view('doctors.create',compact('especialidades','tipodocumentos','generos','rols'));
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
            'nombredoctor'=>'required|string|max:100',
            'apellidodoctor'=>'required|string|max:50',
            'id_Especialidad'=>'required|string|max:50',
            'id_Tipodocumento'=>'required|string|max:50',
            'documentodoctor'=>'required|string|max:50',
            'correodoctor'=>'required|string|max:50',
            'contraseña'=>'required|string|max:50',
            'id_Genero'=>'required|string|max:50',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $doctor = request()->except('_token');
        Doctor::insert($doctor);

        return redirect('doctors')->with('mensaje','Doctor creado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor=Doctor::find($id);
        return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $doctor = Doctor::findOrFail($id);
        $especialidades=Especialidad::all();
        $tipodocumentos=Tipodocumento::all();
        $generos=Genero::all();
        $rols=Rol::all();
        return view('doctors.edit',compact('doctor','especialidades','tipodocumentos','generos','rols'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            
            'nombredoctor'=>'required|string|max:100',
            'apellidodoctor'=>'required|string|max:50',
            'id_Especialidad'=>'required|string|max:50',
            'id_Tipodocumento'=>'required|string|max:50',
            'documentodoctor'=>'required|string|max:50',
            'correodoctor'=>'required|string|max:50',
            'contraseña'=>'required|string|max:50',
            'id_Genero'=>'required|string|max:50',
 
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $doctor = request()->except(['_token','_method']);
        Doctor::where('id','=',$id)->update($doctor);

        $doctor = Doctor::findOrFail($id);
        return redirect('doctors')->with('mensaje','Doctor Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Doctor::destroy($id);
        return redirect('doctors')->with('mensaje','Doctor Eliminado');
    }
}
