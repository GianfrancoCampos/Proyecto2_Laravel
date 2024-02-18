@extends('callcenter.master')
@section('Titulo')
Edicion de Contacto
@endSection

@section('Contenido')
<section class="bg-light py-5">
    <div class="container px-5 my-5 px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <form id="contactForm" action="{{ route('callcenter.update',$contact->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    @if($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <!-- Num Doc input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="numero_documento" type="text" value="{{ $contact->numero_documento ?? old('numero_documento') }}" required />
                        <label for="numero_documento">Numero de Documento</label>
                    </div>

                    <!-- Tipo Doc input-->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" id="dni" name="tipo_documento" value="DNI" {{ old('tipo_documento') === 'DNI' ? 'checked' : '' }}>
                        <label class="form-check-label" for="dni">DNI</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" id="nif" name="tipo_documento" value="NIF" {{ old('tipo_documento') === 'NIF' ? 'checked' : '' }}>
                        <label class="form-check-label" for="nif">NIF</label>
                    </div>


                    <!-- Nombre input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="nombre" type="text" value="{{ $contact->nombre ?? old('nombre') }}" required />
                        <label for="nombre">Nombre</label>
                    </div>

                    <!-- Apellidos input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="apellidos" type="text" value="{{ $contact->apellidos ?? old('apellidos') }}" required />
                        <label for="apellidos">Apellidos</label>
                    </div>

                    <!-- Calle input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="calle" type="text" value="{{ $contact->calle ?? old('calle') }}" required />
                        <label for="calle">Calle</label>
                    </div>

                    <!-- Numero de Calle input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="numero_domicilio" type="number" value="{{ $contact->numero_domicilio ?? old('numero_domicilio') }}" required />
                        <label for="numero_domicilio">Numero de Calle</label>
                    </div>

                    <!-- Codigo Postal input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="cod_postal" type="number" value="{{ $contact->cod_postal ?? old('cod_postal') }}" required />
                        <label for="cod_postal">Codigo Postal</label>
                    </div>

                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endSection
