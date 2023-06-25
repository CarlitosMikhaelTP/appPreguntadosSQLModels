@extends('prueba.layout')
@section('content')
    <h1>Item Details</h1>

    <p><strong>ID:</strong> {{ $alumnos->id_usuario }}</p>
    <p><strong>Name:</strong> {{ $alumnos->nombre }}</p>
    <p><strong>Description:</strong> {{ $alumnos->apellido }}</p>

    {{-- <a href="{{ route('prueba.index') }}">Back</a> --}}
@endsection