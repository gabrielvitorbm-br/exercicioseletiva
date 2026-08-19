@extends('layout')
@section('titulo', 'exercicio 16')
@section('conteudo')

        <h1>exercicio 16 </h1>
        <form method="post" action="/exer16resp">
@csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o preço</label>
                <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
            </div>
             <div class="mb-3">
                <label for="valor2" class="form-label">informe o desconto em %</label>
                <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($des)
            <p> O valor do item vai para apenas:  R${{$des}} </p>
        @endisset
@endsection