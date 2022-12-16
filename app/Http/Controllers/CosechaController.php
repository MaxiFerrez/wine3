<?php

namespace App\Http\Controllers;

use App\Models\Cosecha;
use Illuminate\Http\Request;

class CosechaController extends Controller
{
    
    public function index()
    {
        $cosechas=Cosecha::all();
        return response()->json($cosechas,200);
       /* return view('/',compact('cosechas')); */
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Cosecha $cosecha)
    {
        //
    }

    public function edit(Cosecha $cosecha)
    {
        //
    }


    public function update(Request $request, Cosecha $cosecha)
    {
        //
    }

    public function destroy(Cosecha $cosecha)
    {
        //
    }
}
