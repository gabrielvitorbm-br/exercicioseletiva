@extends('layout')
@section('titulo', 'exercicio 8')
@section('conteudo')

        <h1>exercicio 8 </h1>
        <form method="post" action="/exer8resp">
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
        @isset($are)
            <p> O valor da area é : {{ $are}} </p>
        @endisset
@endsection