<?php

namespace App\Http\Controllers;

use App\Listado;
use App\View;
use Illuminate\Http\Request;

class ListadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $listado=Listado::get();
          $lat='39.550051';      
          $lon='-105.782067,6';          
        return View('listado',compact(['listado','lat','lon']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function show(Listado $listado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function edit(Listado $listado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listado $listado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listado $listado)
    {
        //
    }
}
