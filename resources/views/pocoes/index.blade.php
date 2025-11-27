@extends('layout')

@section('conteudo')

<h1 class="text-center mb-4">Loja Arcana de Baldur’s Gate</h1>

@if(session('sucesso'))
    <div class="alert alert-success">{{ session('sucesso') }}</div>
@endif

<div class="text-end mb-3">
    <a href="{{ route('pocoes.create') }}" class="btn btn-bg3">Adicionar Nova Poção</a>
</div>

<div class="row">
    @foreach ($pocoes as $pocao)
        <div class="col-md-4 mb-4">
            <div class="item-card">
                <div class="text-center">
                    @if ($pocao->imagem)
                        <img src="{{ asset('storage/' . $pocao->imagem) }}" width="130" class="item-img mb-3">
                    @else
                        <img src="https://i.imgur.com/Yz6zBzy.png" width="130" class="item-img mb-3">
                    @endif
                </div>

                <h3>{{ $pocao->nome }}</h3>

                <p><strong>Nível:</strong> {{ $pocao->nivel }}</p>
                <p><strong>Preço:</strong> {{ $pocao->preco }} ouro</p>

                <p class="text-warning"><i>{{ $pocao->descricao }}</i></p>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('pocoes.edit', $pocao->id) }}" class="btn btn-bg3">Editar</a>

                    <form action="{{ route('pocoes.destroy', $pocao->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
