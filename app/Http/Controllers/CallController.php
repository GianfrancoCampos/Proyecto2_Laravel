<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallController extends Controller
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
        $llamadas = Call::find($id);
        return view('callcenter.call.show', compact('llamadas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $llamada = Call::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Call $call)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Call $call)
    {
        //
    }
}
