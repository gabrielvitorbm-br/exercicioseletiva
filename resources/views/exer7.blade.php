@extends('layout')
@section('titulo', 'exercicio 7')
@section('conteudo')

        <h1>exercicio 7 </h1>
        <form method="post" action="/exer7resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o valor em fahrenheith </label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($cel)
            <p> Em celsius o valor é: {{ $cel}} </p>
        @endisset
@endsection