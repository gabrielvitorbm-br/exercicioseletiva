@extends('layout')
@section('titulo', 'exercicio 12')
@section('conteudo')

        <h1>exercicio 12 </h1>
        <form method="post" action="/exer12resp">
@csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe um numero</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">informe o expoente </label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($res)
            <p> O Resulltado é: {{ $res}} </p>
        @endisset
@endsection