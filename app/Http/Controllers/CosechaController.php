<?php

namespace App\Http\Controllers;

use App\Models\Cosecha;
use Illuminate\Http\Request;

class CosechaController extends Controller
{
    
    public function index()
    {
        /* $cosechas=Cosecha::all();
        return view('/',compact('cosechas')); */
    }

    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function show(Cosecha $cosecha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function edit(Cosecha $cosecha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cosecha $cosecha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cosecha  $cosecha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cosecha $cosecha)
    {
        //
    }
}
