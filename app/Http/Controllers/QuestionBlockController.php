<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionBlockRequest;
use App\Http\Requests\UpdateQuestionBlockRequest;
use App\Models\QuestionBlock;

class QuestionBlockController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionBlockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionBlockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionBlock  $questionBlock
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionBlock $questionBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionBlock  $questionBlock
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionBlock $questionBlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionBlockRequest  $request
     * @param  \App\Models\QuestionBlock  $questionBlock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionBlockRequest $request, QuestionBlock $questionBlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionBlock  $questionBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionBlock $questionBlock)
    {
        //
    }
}
