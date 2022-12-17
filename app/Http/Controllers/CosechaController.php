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
        /* $cosechas=Cosecha::all();
        return response()->json($cosechas,200); */
    
        $cosechas = Cosecha::all();
        foreach ($cosechas as $i => $cosecha) {
            $cosechas1[$i]['id'] = $cosecha->id;
            $cosechas1[$i]['titulo'] = $cosecha->titulo;
            $cosechas1[$i]['subtitulo1'] = $cosecha->subtitulo1;
            $cosechas1[$i]['descripcion1'] = $cosecha->descripcion1;
            $cosechas1[$i]['subtitulo2'] = $cosecha->subtitulo2;
            $cosechas1[$i]['descripcion2'] = $cosecha->descripcion2;
            $cosechas1[$i]['subtitulo3'] = $cosecha->subtitulo3;
            $cosechas1[$i]['descripcion3'] = $cosecha->descripcion3;
            $cosechas1[$i]['link'] = $cosecha->link;
            
            if (isset($cosecha->imagen)) { 
                $cosechas1[$i]['imagen'] = env("APP_URL") . "/storage/" . $cosecha->imagen;
            } else {
                $cosechas1[$i]['imagen'] = $cosecha->imagen;
            }
        }
        return response()->json($cosechas1, 200);


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
        // Este no va mas // $cosecha = Cosecha::find($id);
        /* $cosecha = Cosecha::findOrFail($id->id);
        $cosecha->titulo = $request->titulo;
        $cosecha->subtitulo1 = $request->subtitulo1;
        $cosecha->descripcion1 = $request->descripcion1;
        $cosecha->subtitulo2 = $request->subtitulo2;
        $cosecha->save();

       return response()->json(['mensaje'=>$cosecha]); */

       $cosecha = Cosecha::findOrFail($id->id);
       if ($request->hasFile('imagen')) {
        if ($cosecha->imagen != "") {
            Storage::disk('public')->delete($cosecha->imagen);
        }
        $cosecha->fill($request->all());
        $cosecha->imagen = $request->file('imagen')->store('images', 'public');
        $cosecha->save();

       // echo "La noticia fue actualizada con su respectiva imagen";
    } else {
        $cosecha->update(array_filter($request->all()));
       // echo "La noticia fue actualizada sin modificar su imagen";
    }
    return response()->json([
        'noticia' => $cosecha,
        'mensaje' => "La noticia fue actualizada",
    ], 200);


    }

    public function destroy(Cosecha $cosecha)
    {
        //
    }
}
