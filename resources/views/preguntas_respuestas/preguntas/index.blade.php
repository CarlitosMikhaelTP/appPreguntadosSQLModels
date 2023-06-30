@extends('preguntas_respuestas.layouts')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalles Preguntas
                            <a href="{{ url('preguntas/create') }}" class="btn btn-primary">Agregar</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection