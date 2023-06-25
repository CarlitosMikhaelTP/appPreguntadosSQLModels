@extends('prueba.layout')
@section('content')
    <h1>Create Item</h1>

    <form action="{{ route('prueba.store') }}" method="POST">
        @csrf
        <label for="nombre">Name:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellido">apellido:</label>
        <textarea name="apellido" id="apellido" required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>

    {{-- <a href="{{ route('items.index') }}">Back</a> --}}
@endsection