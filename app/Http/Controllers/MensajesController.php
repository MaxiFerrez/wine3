<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MensajesController extends Controller
{
   
    public function index()
    {
        $mensajes = Mensaje::all();

        if(($mensajes == "[]")){ 
            return response()->json([
                'mensaje' => "No hay mensajes",               
            ],404);
        } else return response()->json($mensajes,200);        
    }

    public function store(Request $request)
    {   
        // Validación del formulario de contactos.
        $validaciones = [
            'email' => 'required|email',
            'asunto'=>'required',
            'mensaje' => 'required'
        ];
        $validacion = Validator::make($request->all(), $validaciones);

        if ($validacion->fails()) {
            return response()->json($validacion->errors(), 422);
        }

        $mensaje = new Mensaje();    
        $mensaje->email   = $request->email;
        $mensaje->asunto  = $request->asunto;
        $mensaje->mensaje = $request->mensaje;

        if ($mensaje->save()) {
            return response()->json([
                'estado' => true,
                'mensaje' => 'Formulario recibido.',
            ], 200);
        } else {
            return response()->json([
                'estado' => false,
                'mensaje' => 'Error.',
            ], 400);
        };

    }


    public function show(Mensaje $mensaje)
    {   echo "Falta crear esta Vista";
        //return view('mensajes.show',compact('mensaje'));
    }

}
