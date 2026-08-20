@extends('layout')
@section('titulo', 'exercicio 6')
@section('conteudo')

        <h1>exercicio 6 </h1>
        <form method="post" action="/exer6resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o valor em celsius</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($fah)
            <p> EM fahrenheith o valor é: {{ $fah}} </p>
        @endisset
@endsection