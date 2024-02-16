<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        if(!session('contador')){
            session(['contador' => 0]);
        }

        return view('contact.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => 'required | digits:9 | numeric',
            'tipo_documento' => 'required | in:NIF,DNI',
            'nombre' => 'required | string | max:50',
            'apellidos' => 'required | string | max:50',
            'calle' => 'required | string | max:60',
            'numero_domicilio' => 'required | gt:0 | lte:50 | numeric',
            'cod_postal' => 'required | digits:5 | numeric',


        ]);

        $contact = Contact::create($request->all()); //crea y guarda en la bbdd un nuevo objeto de tipo contacto
        
        return redirect()->route('contacts.show', $contact->id)->with('Perfecto','Contacto creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $id) 
    {
        $contact = Contact::findOrFail($id);
        if(!is_null(session('contador'))){
            $valor = session('contador');
            session(['contador' => ++$valor]);
        }

        return view('contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $id)
    {
        $contact = Contact::find($id);
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $id)
    {
        $request->validate([
            'numero_documento' => 'required | digits:9 | numeric',
            'tipo_documento' => 'required | in:NIF,DNI',
            'nombre' => 'required | string | max:50',
            'apellidos' => 'required | string | max:50',
            'calle' => 'required | string | max:60',
            'numero_domicilio' => 'required | gt:0 | lte:50 | numeric',
            'cod_postal' => 'required | digits:5 | numeric',


        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all()); //crea y guarda en la bbdd un nuevo obeto de tipo libro

        return redirect()->route('contacts.show',$contact->id)->with('Perfecto','Contacto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        
        return redirect()->route('contacts.index')->with('perfecto','Contacto eliminado correctamente');
    }
}
