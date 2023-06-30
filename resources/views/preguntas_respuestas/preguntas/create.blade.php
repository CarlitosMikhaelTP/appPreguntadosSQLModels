@extends('preguntas_respuestas.respuestas.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Preguntas
                            <a href="{{ url('/preguntas')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/preguntas')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="pregunta">Indique la respuesta</label>
                            <select name="id_pregunta" class="form-control">
                                @foreach ($respuestas as $respuesta)
                                    <option value="">{{ $respuesta->id_respuesta }}</option>
                                @endforeach
                            </select>
                            <div class="mb-3">
                                <label for="pregunta">Pregunta</label>
                                <input type="text" name="pregunta" id="pregunta" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="estado">Estado</label>
                                <select class="form-select" name="estado" id="estado">
                                    <option selected>Select</option>
                                    <option value="1">Correcto</option>
                                    <option value="2">Incorrecto</option>
                                  </select>
                            </div>
                            <div>
                                <button class="btn btn-primary">Grabar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection