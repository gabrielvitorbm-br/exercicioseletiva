@extends('layout')
@section('titulo', 'exercicio 5')
@section('conteudo')

        <h1>exercicio 5 </h1>
        <form method="post" action="/exer5resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o primeira nota</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">informe o segunda nota</label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
             <div class="mb-3">
                <label for="valor3" class="form-label">informe a terceira nota para iniciar o calculo da media</label>
                <input type="number" step="any"  id="valor3" name="valor3" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($med)
            <p> Resultado da media das notas é: {{ $med}} </p>
        @endisset
@endsection