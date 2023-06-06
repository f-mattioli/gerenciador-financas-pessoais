@extends('templates.main')

@section('content')
<h1 class="TitleRecebimentos">Detalhes do Tipo de Recebimento</h1>
<div class="ContainerMainRecebimento">
<form method="POST" action="/tipos-recebimento/{{ $tipoRecebimento->id }}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        Código: {{ $tipoRecebimento->id }}
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" 
            class="form-control" 
            name="descricao" 
            id="descricao"
            value="{{ $tipoRecebimento->descricao }}">
    </div>


    <button type="submit" class="btn btn-primary BtnCreateDespesas">Salvar</button>

</form>
</div>


@endsection