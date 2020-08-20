<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    public function store(UsuarioRequest $request){

        //VALIDACIONES USANDO validate

        // request()->validate([
        //     "fullname" => "required",
        //     "apellidos" => "required",
        //     "tipo_documento" => "required|not_in:0",
        //     "number_doc" => "required",
        //     "email" => "required|email",
        //     // "fecha_nac" => "required|date",
        //     "direccion" => "required"
        // ]);

        // $nombre = request('fullname');
        // $apellidos = request('apellidos');
        // $tipo_documento = request('tipo_documento');

        // if ($tipo_documento == 1) {
        //     $tipo_doc = "DNI";
        // } else if($tipo_documento == 2) {
        //     $tipo_doc = "CARNET DE EXTRANJERIA";
        // }

        // $numero_doc = request('number_doc');
        // $correo = request('email');
        // $fecha_nacimiento = request('fecha_nac');
        // $direccion = request('direccion');

        // $usuario = User::create([
        //     "nombre" => $nombre,
        //     "apellidos" => $apellidos,
        //     "tipo_documento" => $tipo_doc,
        //     "numero_documento" => $numero_doc,
        //     "email" => $correo,
        //     "fecha_nacimiento" => $fecha_nacimiento,
        //     "direccion" => $direccion
        // ]);

        // return redirect()->route('mensaje');

        if ($request->ajax()) {
            $nombre = $request->nombre;
            $apellidos = $request->apellidos;
            $tipo_documento = $request->tipo_documento;

            if ($tipo_documento == 1) {
                $tipo_doc = "DNI";
            } else if($tipo_documento == 2) {
                $tipo_doc = "CARNET DE EXTRANJERIA";
            }

            $numero_doc = $request->numero;
            $email = $request->email;
            $fecha = $request->nueva_fecha;
            $direccion = $request->direccion;

            $usuario = User::create([
                "nombre" => $nombre,
                "apellidos" => $apellidos,
                "tipo_documento" => $tipo_doc,
                "numero_documento" => $numero_doc,
                "email" => $email,
                "fecha_nacimiento" => $fecha,
                "direccion" => $direccion
            ]);
            if($usuario){
                return response()->json(["mensaje" => "Registrado correctamente."]);
            }
            }
    }
}
