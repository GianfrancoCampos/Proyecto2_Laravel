<?php

namespace App\Http\Controllers;

use App\Models\itemBill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemBillController extends Controller
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
        $item_factura = itemBill::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(itemBill $itemBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, itemBill $itemBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(itemBill $itemBill)
    {
        //
    }
}
