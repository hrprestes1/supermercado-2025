@extends('template')

@section('conteudo')
<h1>Produtos</h1>
    <div class="container">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Operações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td><a href="{{ route('produtos.alterar',['id' => $produto->id ]) }}">Alterar</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('produtos.novo    ') }}" class="btn btn-primary">Cadastrar</a>
@endsection