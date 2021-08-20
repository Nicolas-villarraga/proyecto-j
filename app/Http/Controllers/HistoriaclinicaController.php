<?php

namespace App\Http\Controllers;

use App\Models\Historiaclinica;
use Illuminate\Http\Request;

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
    return view('historiaclinica.index',$historiaclinica);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('historiaclinica.create');
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
            'fechacreacionhistoriaclinica'=>'required|string|max:100',
            'descripcionhistoriaclinica'=>'required|string|max:50',         
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $historiaclinica = request()->except('_token');
        Historiaclinica::insert($historiaclinica);
        //return response()->json($historiaclinica);

        return redirect('historiaclinicas')->with('mensaje','historiaclinica creada con exito'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historiaclinica  $historiaclinica
     * @return \Illuminate\Http\Response
     */
    public function show(Historiaclinica $historiaclinica)
    {
        //
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
        
        return view('historiaclinicas.edit',compact('historiaclinica'));
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
            'fechacreacionhistoriaclinica'=>'required|string|max:100',
            'descripcionhistoriaclinica'=>'required|string|max:50',         
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $historiaclinica = request()->except(['_token','_method']);
        Historiaclinica::where('id','=',$id)->update($historiaclinica);

        $historiaclinica = Historiaclinica::findOrFail($id);
        //return view('doctors.edit',compact('doctor'));
        return redirect('historiaclinicas')->with('mensaje','Historiaclinica Modificada');

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
        return redirect('historiaclinicas')->with('mensaje','Historiaclinica eliminada');
    }
}
