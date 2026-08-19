@extends('layout')
@section('titulo', 'exercicio 10')
@section('conteudo')

        <h1>exercicio 10 </h1>
        <form method="post" action="/exer10resp">
@csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe a largura de um retangulo </label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">informe a altura de um retangulo </label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($per)
            <p> O valor do Perimetro do retangulo É: {{ $per}} </p>
        @endisset
@endsection