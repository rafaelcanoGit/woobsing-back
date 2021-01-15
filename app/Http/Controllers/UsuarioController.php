<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    
    public function index(Request $request){ 
        $users = DB::table('usuarios')->get();
        return json_encode($users) ;
    }
    public function store(Request $request){ 
        $usuario = new Usuario;
        $usuario->nombre = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');
        $usuario->telefono = $request->get('telefono');
        $usuario->email = $request->get('email');
        $usuario->direccion = $request->get('direccion');
        $usuario->save();
    }
    public function update(Request $request, $usuario_id){
        $usuario = Usuario::findOrFail($usuario_id);
        $usuario->nombre = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');
        $usuario->telefono = $request->get('telefono');
        $usuario->email = $request->get('email');
        $usuario->direccion = $request->get('direccion');
        $usuario->update();
    }
    public function destroy($usuario_id){
        DB::table('usuarios')->where('usuario_id', $usuario_id)->delete();
    }

}
