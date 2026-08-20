@extends('layout')
@section('titulo', 'exercicio 20')
@section('conteudo')

        <h1>exercicio 20 </h1>
        <form method="post" action="/exer20resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe a distancia</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">informe o  tempo</label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($vel)
            <p> Sua velocidade media é: {{ $vel}} </p>
        @endisset
@endsection