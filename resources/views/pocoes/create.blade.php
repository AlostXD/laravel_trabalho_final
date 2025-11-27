@extends('layout')

@section('conteudo')

<h2 class="mb-4">Criar Nova Poção</h2>

<form action="{{ route('pocoes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Nome da Poção</label>
        <input type="text" class="form-control" name="nome">
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
    </div>

    <div class="mb-3">
        <label>Nível (1-10)</label>
        <input type="number" class="form-control" name="nivel" min="1" max="10">
    </div>

    <div class="mb-3">
        <label>Preço em Ouro</label>
        <input type="number" step="0.01" class="form-control" name="preco">
    </div>

    <div class="mb-3">
        <label>Imagem da Poção</label>
        <input type="file" class="form-control" name="imagem">
    </div>

    <button class="btn btn-bg3">Criar Poção</button>
</form>

@endsection
