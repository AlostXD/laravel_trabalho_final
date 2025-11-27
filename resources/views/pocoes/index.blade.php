<h1>Loja de Poções Mágicas</h1>

@if(session('sucesso'))
    <p style="color: green">{{ session('sucesso') }}</p>
@endif

<a href="{{ route('pocoes.create') }}">Criar nova poção</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Nível</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    @foreach ($pocoes as $pocao)
    <tr>
        <td>{{ $pocao->id }}</td>
        <td>
            @if($pocao->imagem)
                <img src="{{ asset('storage/' . $pocao->imagem) }}" width="70">
            @else
                Sem imagem
            @endif
        </td>
        <td>{{ $pocao->nome }}</td>
        <td>{{ $pocao->nivel }}</td>
        <td>{{ $pocao->preco }}</td>
        <td>
            <a href="{{ route('pocoes.edit', $pocao->id) }}">Editar</a> |
            <form action="{{ route('pocoes.destroy', $pocao->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
