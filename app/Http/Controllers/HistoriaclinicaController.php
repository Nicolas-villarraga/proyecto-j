<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Historiaclinica;
use App\Models\Paciente;
use App\Models\Proceso;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class HistoriaclinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $historiaclinica['historiaclinicas']=Historiaclinica::paginate(5);
        return view('historiaclinicas.index',$historiaclinica);
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
        $pacientes = Paciente::all();
        return view('historiaclinicas.create',compact('doctores','pacientes'));
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
            'fechadecreacionhistoria'=>'required|date|max:100',
            'descripcionhistoria'=>'required|string',
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $historiaclinica = request()->except('_token');
        Historiaclinica::insert($historiaclinica);

        return redirect('historiaclinicas')->with('mensaje','Historia creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historiaclinica  $historiaclinica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historiaclinica = Historiaclinica::find($id);
        return view('historiaclinicas.show',compact('historiaclinica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historiaclinica  $historiaclinica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $historiaclinica = Historiaclinica::findOrFail($id);
        $doctores=Doctor::all();
        $pacientes = Paciente::all();
        return view('historiaclinicas.edit',compact('historiaclinica','doctores','pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historiaclinica  $historiaclinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'fechadecreacionhistoria'=>'required|date',
            'descripcionhistoria'=>'required|string',


        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $historiaclinica = request()->except(['_token','_method']);
        Historiaclinica::where('id','=',$id)->update($historiaclinica);

        $historiaclinica = Historiaclinica::findOrFail($id);
        return redirect('historiaclinicas')->with('mensaje','Historia Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historiaclinica  $historiaclinica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Historiaclinica::destroy($id);
        return redirect('historiaclinicas')->with('mensaje','Historia eliminada');
    }
    
}
