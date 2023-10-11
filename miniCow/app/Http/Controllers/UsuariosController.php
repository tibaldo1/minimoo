<?php

namespace App\Http\Controllers;

use App\Models\Auxiliar;
use App\Models\Usuario;
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
        return Usuario::all();
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return "Usuario Criado!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Usuario $usuario)
    {
        $usuario->fill($request->all());
        $usuario->save();
        return "usuarios atualizados com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        Usuario::destroy($usuario->cpf);
        return "user deleted";
    }

    public function exibe_user_vaquinha(Auxiliar $auxiliar){
        return Auxiliar::all();
    }
    public function cria_user_vaquinha(Auxiliar $auxiliar, Request $request){
        Auxiliar::create($request->all());
        return "vaquinha user criada com sucesso";
    }
    public function atualiza_user_vaquinha(Auxiliar $auxiliar, Request $request){
        $auxiliar->fill($request->all());
        $auxiliar->save();
        return "vaquinha user atualizada com sucesso";
   }
   public function destroy_user_vaquinha(Auxiliar $auxiliar){
    Auxiliar::destroy($auxiliar->id);
    return "vaquinha user removida com sucesso";
}
}
