@extends('layout')
@section('titulo', 'exercicio 14')
@section('conteudo')

        <h1>exercicio 14 </h1>
        <form method="post" action="/exer14resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe um valor em quilômetros</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($mil)
            <p> O Resulltado em milhas é : {{ $mil}} </p>
        @endisset
@endsection