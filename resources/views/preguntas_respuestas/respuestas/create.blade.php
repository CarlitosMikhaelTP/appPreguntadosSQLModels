@extends('preguntas_respuestas.respuestas.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Respuestas
                            <a href="{{ url('/respuestas')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/respuestas')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="respuesta">Respuesta</label>
                                <input type="text" name="respuesta" id="respuesta" class="form-control">
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