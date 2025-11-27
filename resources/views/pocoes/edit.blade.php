@extends('layout')

@section('conteudo')

<h2 class="mb-4">Editar Poção</h2>

@if(session('sucesso'))
    <div class="alert alert-success">{{ session('sucesso') }}</div>
@endif

<form action="{{ route('pocoes.update', $pocao->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-4 text-center">
            <h5>Imagem Atual</h5>

            @if ($pocao->imagem)
                <img src="{{ asset('storage/' . $pocao->imagem) }}" width="180" class="item-img mb-3">
            @else
                <img src="https://i.imgur.com/Yz6zBzy.png" width="180" class="item-img mb-3">
            @endif

            <div class="mt-3">
                <label><strong>Nova Imagem</strong></label>
                <input type="file" class="form-control" name="imagem">
            </div>
        </div>

        <div class="col-md-8">

            <div class="mb-3">
                <label><strong>Nome da Poção</strong></label>
                <input type="text" class="form-control" name="nome" value="{{ $pocao->nome }}">
            </div>

            <div class="mb-3">
                <label><strong>Descrição</strong></label>
                <textarea class="form-control" name="descricao">{{ $pocao->descricao }}</textarea>
            </div>

            <div class="mb-3">
                <label><strong>Nível (1-10)</strong></label>
                <input type="number" class="form-control" name="nivel" min="1" max="10" value="{{ $pocao->nivel }}">
            </div>

            <div class="mb-3">
                <label><strong>Preço em Ouro</strong></label>
                <input type="number" step="0.01" class="form-control" name="preco" value="{{ $pocao->preco }}">
            </div>

            <button class="btn btn-bg3 mt-3">Salvar Alterações</button>

        </div>
    </div>
</form>

@endsection
