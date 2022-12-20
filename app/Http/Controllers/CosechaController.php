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
        $cosechas = Cosecha::all();

        if (!isset($cosechas)){
            return response()->json([
                'mensaje' => 'Error. Ocurrió algo inesperado.',
                'estado'  => false
            ], 400);
        } 
        return response()->json([
            'mensaje' => 'Petición completada exitósamente.',
            'estado'  => true,
            'cosechas'=> $cosechas   
        ], 200);
    }
}
