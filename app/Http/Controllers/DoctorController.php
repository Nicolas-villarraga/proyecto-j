<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

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
        return view('doctor.index',$doctor);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctor.create'); 
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
            'especialidad'=>'required|string|max:100',
              
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $doctor = request()->except('_token');
        Doctor::insert($doctor);
        //return response()->json($doctor);

        return redirect('doctors')->with('mensaje','Doctor creado con exito'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Respons e
     */

    public function edit($id)
    {
        //
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit',compact('doctor'));
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
            'especialidad'=>'required|string|max:100',
           
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $doctor = request()->except(['_token','_method']);
        Doctor::where('id','=',$id)->update($doctor);

        $doctor = Doctor::findOrFail($id);
        //return view('doctors.edit',compact('doctor'));
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
        return redirect('doctors')->with('mensaje','Doctor eliminado');
    }
}
?>