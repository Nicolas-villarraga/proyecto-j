<?php

namespace App\Http\Controllers;

use App\Models\Tipodocumento;
use Illuminate\Http\Request;

class TipodocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipodocumento['tipodocumentos']=Tipodocumento::paginate(8);
        return view('tipodocumentos.index',$tipodocumento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipodocumentos.create');
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
            'nombretipodocumento'=>'required|string|max:100',  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $tipodocumento = request()->except('_token');
        Tipodocumento::insert($tipodocumento);

        return redirect('tipodocumentos')->with('mensaje','Documento creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipodocumento =Tipodocumento::find($id);
        return view('tipodocumentos.show',compact('tipodocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipodocumento = Tipodocumento::findOrFail($id);
        return view('tipodocumentos.edit',compact('tipodocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombretipodocumento'=>'required|string|max:100',
  
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $tipodocumento = request()->except(['_token','_method']);
        Tipodocumento::where('id','=',$id)->update($tipodocumento);

        $tipodocumento = Tipodocumento::findOrFail($id);
        return redirect('tipodocumentos')->with('mensaje','Documento Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tipodocumento::destroy($id);
        return redirect('tipodocumentos')->with('mensaje','Documento eliminado');

    }
}
