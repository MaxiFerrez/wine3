<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
   
    public function index()
    {
        $mensajes=Mensaje::all();
        return view('mensajesadmin',compact('mensajes'));        
    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $mensaje=new Mensaje;
        /* $mensaje->nombre = $request->nombre;
        $mensaje->email = $request->email;
        $mensaje->telefono = $request->telefono;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save(); */
        $mensaje->create(request()->all());
        return redirect()->back();
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

    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return redirect(route('mensajes.index'));        
    }
}
