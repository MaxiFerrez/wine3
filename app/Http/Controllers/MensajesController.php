<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
   
    public function index()
    {
        $mensajes=Mensaje::all();
        //return $mensajes;
        if(($mensajes == "[]")){ 

            return response()->json([
                'mensaje' => "No hay mensajes",
               
            ],404);}
            else { 
                foreach ($mensajes as $i => $mje) {
        
                    $mensajes1[$i]['id'] = $mje->id;
                    $mensajes1[$i]['email'] = $mje->email;
                    $mensajes1[$i]['asunto'] = $mje->asunto;
                    $mensajes1[$i]['mensaje'] = $mje->mensaje;
                } 
                return response()->json($mensajes1,200);
            }   
        //return view('mensajesadmin',compact('mensajes'));        
       
    }

    public function store(Request $request)
    {   
        // Validación del formulario. Autor: Leandro.
        $this->validate($request, [
            'email' => 'required|email',
            'asunto'=>'required',
            'mensaje' => 'required'
            ]);
       /*  $mensaje=new Mensaje;
        $mensaje->create(request()->all());
        response()->json([
            'estado' => true,
            'mensaje' =>'Su formulario ha sido enviado,Gracias'
        ],200); */
        //return redirect()->back(); 

        $mensajes = new Mensaje;
        //$contacto = contacto::create($request->all());
        $mensajes->email = $request->email;
        $mensajes->asunto = $request->asunto;
        $mensajes->mensaje = $request->mensaje;

        if ($mensajes->save()) {
            return response()->json([
                'estado' => true,
                'mensaje' => 'Su formulario ha sido enviado, Gracias por comunicarte',
            ], 200);
        } else {
            return response()->json([
                'estado' => false,
                'mensaje' => 'Su formulario no se envio',
            ], 404);
        };

    }


    public function show(Mensaje $mensaje)
    {   echo "Falta crear esta Vista";
        //return view('mensajes.show',compact('mensaje'));
    }

    public function edit(Mensaje $mensaje)
    {
        //
    }

    public function update(Request $request, Mensaje $mensaje)
    {
        //
    }

    public function destroy(Request $request)
    {   
        Mensaje::destroy($request->id);
       // $mensaje->delete();
        
        
        
        //return redirect(route('mensajes.index'));   
        return response()->json([
            'mensaje' => "Eliminado Exitosamente",
           
        ],200);     
    }
}
