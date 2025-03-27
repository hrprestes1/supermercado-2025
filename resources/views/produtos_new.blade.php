@extends('template')

@section('conteudo')
<h1>Produtos (novo)</h1>
    <form action="{{ route('produtos.inserir') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="preco" placeholder="Digite seu nome">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" id="preco" name="preco" placeholder="R$0.00" min="0">
        </div>
    </form>
    <div class="col-sm-2"></div>
    <input type="submit" value="Cadastrar" class="btn btn-succsess">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection