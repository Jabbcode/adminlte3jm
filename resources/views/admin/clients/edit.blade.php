@extends('adminlte::page')

@section('title', '3JM Administrative')

@section('content_header')
    <h1>Editar informacion del cliente - {{$cliente->nombre}}</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop