@extends('preguntas_respuestas.layouts')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar Pregunta
                            <a href="{{ url('/preguntas') }}" class="btn btn-primary float-end">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/preguntas') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Pregunta</label>
                                <input type="text" name="pregunta" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Estado</label>
                                <select name="estado" id="estado" class="form-select">
                                    <option value="0">Correcta</option>
                                    <option value="1">Incorrecta</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Grabar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection