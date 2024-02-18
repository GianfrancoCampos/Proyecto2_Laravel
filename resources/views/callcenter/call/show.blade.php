@extends('callcenter.master')
@section('Titulo')
Detalle de las llamadas
@endSection

@section('Contenido')
<div class="container">
    <div class="text-center">
    </div>
    <table class="table mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero Documento(Contacto)</th>
                <th scope="col">ID de Operadores</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha de llamada</th>
                <th scope="col">Hora de llamada</th>
                <th scope="col">Numero de linea interna</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$llamadas->id}}</td>
                <td>{{$llamadas->numero_documento_contacto_id}}</td>
                <td>{{$llamadas->operador_id}}</td>
                <td>{{$llamadas->numero_telefono}}</td>
                <td>{{$llamadas->fecha_llamada}}</td>
                <td>{{$llamadas->hora_llamada}}</td>
                <td>{{$llamadas->numero_linea_interno}}</td>
                <td><a type="button" class="btn btn-outline-primary" href="{{route('callcenter.index')}}">REGRESAR</a></td>
            </tr>
        </tbody>
    </table>
</div>
@endSection
