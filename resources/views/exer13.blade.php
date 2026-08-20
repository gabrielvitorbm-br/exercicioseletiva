@extends('layout')
@section('titulo', 'exercicio 13')
@section('conteudo')

        <h1>exercicio 13 </h1>
        <form method="post" action="/exer13resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe um valor em metros</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($cen)
            <p> O Resulltado em centimetros é : {{ $cen}} </p>
        @endisset
@endsection