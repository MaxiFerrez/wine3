<?php

namespace App\Http\Controllers;

use App\Models\Cosecha;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CosechaController extends Controller
{
    
    public function index()
    {
        $cosechas=Cosecha::all();
        return response()->json($cosechas,200);
       /* return view('/',compact('cosechas')); */
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Cosecha $cosecha)
    {
        //
    }

    public function update(Cosecha $id, Request $request)
    {    
        //return $request;
        $cosecha = Cosecha::find($id);
        //$cosecha = Cosecha::findOrFail($request->id);
        $cosecha->titulo = $request->titulo;
        $cosecha->subtitulo1 = $request->subtitulo1;
        $cosecha->descripcion1 = $request->descripcion1;
        $cosecha->subtitulo2 = $request->subtitulo2;

        //$cosecha->update(array_filter($request->validated()));
        $cosecha->save(); 
        
        return  $cosecha; 

       // return response()->json(['mensaje'=>$cosecha]);
    }

    public function destroy(Cosecha $cosecha)
    {
        //
    }
}
