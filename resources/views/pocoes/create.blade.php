<h1>Criar Poção</h1>

<form action="{{ route('pocoes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    Nome: <input type="text" name="nome"><br><br>

    Descrição: <textarea name="descricao"></textarea><br><br>

    Nível (1-10): <input type="number" name="nivel" min="1" max="10"><br><br>

    Preço: <input type="number" step="0.01" name="preco"><br><br>

    Imagem: <input type="file" name="imagem" accept="image/*"><br><br>

    <button type="submit">Criar</button>
</form>
