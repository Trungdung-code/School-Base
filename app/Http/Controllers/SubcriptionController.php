<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubcriptionRequest;
use App\Http\Requests\UpdateSubcriptionRequest;
use App\Models\Subcription;

class SubcriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSubcriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubcriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcription  $subcription
     * @return \Illuminate\Http\Response
     */
    public function show(Subcription $subcription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcription  $subcription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcription $subcription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubcriptionRequest  $request
     * @param  \App\Models\Subcription  $subcription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubcriptionRequest $request, Subcription $subcription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcription  $subcription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcription $subcription)
    {
        //
    }
}
