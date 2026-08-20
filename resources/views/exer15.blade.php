@extends('layout')
@section('titulo', 'exercicio 15')
@section('conteudo')

        <h1>exercicio 15 </h1>
        <form method="post" action="/exer15resp">
        @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe seu peso</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
             <div class="mb-3">
                <label for="valor2" class="form-label">informe sua alturaa</label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($imc)
            <p> O IMC é: {{ $imc}} </p>
        @endisset
@endsection