<?php

namespace App\Http\Controllers;

use App\Models\Grad;
use Illuminate\Http\Request;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grads = Grad::all();

        return $grads;
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
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function show($grad_id)
    {
        $grad = Grad::find($grad_id);
        if(is_null($grad)){
            return response() -> json('Data not found.', 404);
        }
        return response() -> json($grad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function edit(Grad $grad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $grad_id)
    {
        Grad::delete($grad_id);
    }
}
