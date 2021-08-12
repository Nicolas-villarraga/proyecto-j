<?php

namespace App\Http\Controllers;

use App\Models\Acudiente;
use Illuminate\Http\Request;

class AcudienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $acudiente['acudientes']=Acudiente::paginate(5);
        return view('acudientes.index',$acudiente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('acudientes.create');
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
            'nombreacudiente'=>'required|string|max:100',
            'tipodocumentopaciente'=>'required|string|max:50',
            'documentoacudiente'=>'required|string|max:100',
            'parentescoacudiente'=>'required|string|max:100',
            'telefonoacudiente'=>'required|string|max:100',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $acudiente = request()->except('_token');
        Acudiente::insert($acudiente);
        //return response()->json($cita);

        return redirect('acudientes')->with('mensaje','acudiente creado con exito'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function show(Acudiente $acudiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $acudiente = Acudiente::findOrFail($id);
        return view('acudientes.edit',compact('acudiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombreacudiente'=>'required|string|max:100',
            'tipodocumentopaciente'=>'required|string|max:50',
            'documentoacudiente'=>'required|string|max:100',
            'parentescoacudiente'=>'required|string|max:100',
            'telefonoacudiente'=>'required|string|max:100',   
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $acudiente = request()->except(['_token','_method']);
        Acudiente::where('id','=',$id)->update($acudiente);

        $acudiente = Acudiente::findOrFail($id);
        //return view('citas.edit',compact('cita'));
        return redirect('acudientes')->with('mensaje','acudiente Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Acudiente::destroy($id);
        return redirect('acudientes')->with('mensaje','Acudiente eliminado');
    }
}
