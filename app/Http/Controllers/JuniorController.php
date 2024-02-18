<?php

namespace App\Http\Controllers;

use App\Models\Junior;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Logging\Junit;

class JuniorController extends Controller
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
        $junior = Junior::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Junior $junior)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Junior $junior)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Junior $junior)
    {
        //
    }
}
