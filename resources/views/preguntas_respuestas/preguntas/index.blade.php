@extends('preguntas_respuestas.respuestas.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Preguntas
                            <a href="{{ url('/preguntas/create')}}" class="btn btn-primary float-end">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pregunta</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($preguntas as $pregunta)
                                    <tr>
                                        <td>{{ $pregunta->id_pregunta}}</td>
                                        <td>{{ $pregunta->pregunta}}</td>
                                        <td>{{ $pregunta->estado}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection