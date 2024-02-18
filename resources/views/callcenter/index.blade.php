@extends('callcenter.master')

@section('Titulo')

Welcome To CallCenter

@endSection

@section('Contenido')
<div class="container">
    <div class="text-center">
        <h1>LISTA DE CONTACTOS</h1>
    </div>
    <table class="table mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
            <tr>
                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->apellidos}}</td>
                <td><a type="button" class="btn btn-outline-success" href="./callcenter/{{$contacto->id}}">Ver Detalles</a></td>
                <td><a type="button" class="btn btn-outline-info" href="{{route('callcenter.edit',$contacto->id)}}">Editar</a></td>
                <td>
                <form action="{{url('callcenter/'.$contacto->id)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Deseas borrar?');">Eliminar</button>
                </form>
            </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endSection