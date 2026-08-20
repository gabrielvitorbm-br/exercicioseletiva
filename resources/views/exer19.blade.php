@extends('layout')
@section('titulo', 'exercicio 19')
@section('conteudo')

        <h1>exercicio 19 </h1>
        <form method="post" action="/exer19resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe um valor em dias</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($hor)
            <p>  em horas é: {{$hor}} </p>
            <p>  em minutos é: {{$min}} </p>
            <p>  em segundos é: {{$seg}} </p>
        @endisset
@endsection