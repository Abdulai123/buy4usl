<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalculatorRequest;
use App\Http\Requests\UpdateCalculatorRequest;
use App\Models\Calculator;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCalculatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Calculator $calculator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calculator $calculator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalculatorRequest $request, Calculator $calculator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calculator $calculator)
    {
        //
    }
}
