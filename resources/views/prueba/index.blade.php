@extends('prueba.layout')
@section('content')

<div class="table">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id_usuario }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellido }}</td>
                {{-- <td>
                    <a href="{{ route('prueba.show', $item->id) }}">View</a>
                    <a href="{{ route('prueba.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('prueba.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
</div>
    
@endsection