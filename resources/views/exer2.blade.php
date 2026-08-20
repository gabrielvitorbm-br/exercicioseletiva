@extends('layout')
@section('titulo', 'exercicio 2')
@section('conteudo')

        <h1>exercicio 2 </h1>
        <form method="post" action="/exer2resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o primeiro valor</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">informe o segundo valor para subtrarir</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($sub)
            <p> Resultado da subtração: {{ $sub}} </p>
        @endisset
@endsection