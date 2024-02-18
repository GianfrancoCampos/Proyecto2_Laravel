<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Models\Call;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contact::all();
        return view('callcenter.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('callcenter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => ['required','regex:/^[0-9]{8}[A-Z]$/'],
            'tipo_documento' => 'required|in:DNI,NIF',
            'nombre' => ['required','regex:/^[a-zA-Z ]+$/'],
            'apellidos' => ['required','regex:/^[a-zA-Z ]+$/'],
            'calle' => ['required','regex:/^[a-zA-Z ]+$/'],
            'numero_domicilio' => ['required','regex:/[0-9]+/'],
            'cod_postal' => ['required','regex:/^\d{5}$/']
        ]);
    
        // Imprime los valores después de la validación
    
         $contacto = Contact::create($request->all());
         return redirect()->route('callcenter.show',$contacto->id);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacto = Contact::find($id);
        $total_Llamadas = Call::where('numero_documento_contacto_id', $contacto->id)->count();
        return view('callcenter.show', compact('contacto', 'total_Llamadas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('callcenter.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'numero_documento' => ['required','regex:/^[0-9]{8}[A-Z]$/'],
            'tipo_documento' => 'required|in:DNI,NIF',
            'nombre' => ['required','string','max:50'],
            'apellidos' => ['required','regex:/^[a-zA-Z]+$/'],
            'calle' => ['required','string','max:50'],
            'numero_domicilio' => ['required','regex:/[0-9]+/'],
            'cod_postal' => ['required','regex:/^\d{5}$/']
        ]);

        $contact = Contact::find($id);
        $contact->update($request->all());

        return redirect()->route('callcenter.show', $contact->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('callcenter.index');
    
    }
}
