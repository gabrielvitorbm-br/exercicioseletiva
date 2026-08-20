@extends('layout')
@section('titulo', 'exercicio 18')
@section('conteudo')

        <h1>exercicio 18 </h1>
        <form method="post" action="/exer18resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe a capital</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
             <div class="mb-3">
                <label for="valor2" class="form-label">informe a taxa de juros%</label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
             <div class="mb-3">
                <label for="valor3" class="form-label">informe o periodo</label>
                <input type="number" step="any" id="valor3" name="valor3" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($mon)
            <p>  O montante é : R${{$mon}} </p>
        @endisset
@endsection