@extends('layout')
@section('titulo', 'exercicio 9')
@section('conteudo')

        <h1>exercicio 9 </h1>
        <form method="post" action="/exer9resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o raio de um circulo </label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($are)
            <p> O valor da area é : {{ $are}} </p>
        @endisset
@endsection