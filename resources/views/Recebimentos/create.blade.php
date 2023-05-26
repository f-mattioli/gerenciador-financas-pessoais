<form action="{{ route('recebimentos.store') }}" method="POST">
    @csrf

    <div>
        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" value="{{ old('valor') }}" required>
        @error('valor')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ old('descricao') }}" required>
        @error('descricao')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Salvar</button>
</form>
