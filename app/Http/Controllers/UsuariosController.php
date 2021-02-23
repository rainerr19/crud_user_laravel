<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('home',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $user = new Usuarios;
         $user->nombre = $request->nombre;
         $user->apellido = $request->apellido;
         $user->correo = $request->email;
         $user->telefono = $request->tel;
         $user->save();
         return redirect()->route('index')->with('success','Guardado');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Usuarios  $usuarios
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Usuarios $usuarios)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuarios::find($id);
        return view('editar',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);

         $usuario->nombre = $request->nombre;
         $usuario->apellido = $request->apellido;
         $usuario->correo = $request->email;
         $usuario->telefono = $request->tel;
         $usuario->update();
         return redirect()->route('index')->with('success','Editado');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuarios::find($id);
        $usuario->delete();
        return back()->with('success','Eliminado');
    }
}
