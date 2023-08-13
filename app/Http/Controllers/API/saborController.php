<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\sabor;
use App\Http\Resources\saborResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class saborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sabores = Sabor::all();
        return response([ 'data' => SaborResource::collection($sabores), 'message' => 'Retrieved successfully.'], 200);
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
     * @param  \App\Models\sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function show(sabor $sabor)
    {
        return response(['data' => new saborResource($sabor), 'message' => 'Retrieved successfully.'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sabor $sabor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function destroy(sabor $sabor)
    {
        //
    }
}