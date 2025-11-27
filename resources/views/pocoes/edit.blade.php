<h1>Editar Poção</h1>

<form action="{{ route('pocoes.update', $pocao->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    Nome: <input type="text" name="nome" value="{{ $pocao->nome }}"><br><br>

    Descrição: <textarea name="descricao">{{ $pocao->descricao }}</textarea><br><br>

    Nível: <input type="number" name="nivel" min="1" max="10" value="{{ $pocao->nivel }}"><br><br>

    Preço: <input type="number" step="0.01" name="preco" value="{{ $pocao->preco }}"><br><br>

    Imagem atual:<br>
    @if($pocao->imagem)
        <img src="{{ asset('storage/' . $pocao->imagem) }}" width="100"><br>
    @endif

    Nova imagem: <input type="file" name="imagem"><br><br>

    <button type="submit">Salvar alterações</button>
</form>
