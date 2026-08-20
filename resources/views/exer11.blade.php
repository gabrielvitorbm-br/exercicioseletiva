@extends('layout')
@section('titulo', 'exercicio 11')
@section('conteudo')

        <h1>exercicio 11 </h1>
        <form method="post" action="/exer11resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o raio de um circulo </label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($per)
            <p> O valor do périmetro é: {{ $per}} </p>
        @endisset
@endsection