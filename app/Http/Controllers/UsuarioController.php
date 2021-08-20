<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario['usuarios']=Usuario::paginate(5);
        return view('usuarios.index',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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
            'nombreusuario'=>'required|string|max:100',
            'apellidousuario'=>'required|string|max:100',
            'tipodocumento'=>'required|string|max:100',
            'documentousuario'=>'required|string|max:100',
            'correousuario'=>'required|string|max:100',
            'telefonousuario'=>'required|max:100',
            'rolusuario'=>'required|string|max:100',
            ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);


        $usuario = request()->except('_token');
        Usuario::insert($usuario);
        //return response()->json($cita);

        return redirect('usuarios')->with('mensaje','Usuario creado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'nombreusuario'=>'required|string|max:100',
            'apellidousuario'=>'required|string|max:100',
            'tipodocumento'=>'required|string|max:100',
            'documentousuario'=>'required|string|max:100',
            'correousuario'=>'required|string|max:100',
            'telefonousuario'=>'required|max:100',
            'rolusuario'=>'required|string|max:100', 
        ];

        $mensaje=[
            'required'=>'El  :attribute es requerido'
        ];

        $this->validate($request, $campos,$mensaje);

        $usuario = request()->except(['_token','_method']);
        Usuario::where('id','=',$id)->update($usuario);

        $usuario = Usuario::findOrFail($id);
        //return view('citas.edit',compact('cita'));
        return redirect('usuarios')->with('mensaje','usuario Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuario::destroy($id);
        return redirect('usuarios')->with('mensaje','usuario cancelado');
    }
}
