<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\estado;
use App\Http\Resources\estadoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class estadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return response([ 'data' => estadoResource::collection($estados), 'message' => 'Retrieved successfully.'], 200);
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
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(estado $estado)
    {
        return response(['data' => new estadoResource($estado), 'message' => 'Retrieved successfully.'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(estado $estado)
    {
        //
    }
}
