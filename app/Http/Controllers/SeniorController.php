<?php

namespace App\Http\Controllers;

use App\Models\Senior;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeniorController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $senior = Senior::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Senior $senior)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Senior $senior)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Senior $senior)
    {
        //
    }
}
