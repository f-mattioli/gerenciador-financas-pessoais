@extends('templates.main')

@section('content')
<h1 class="TitleDespesas">Detalhes do Tipo de Recebimento</h1>
<div class="ContainerMainRecebimentos">
<form method="POST" action="/tipos-recebimento/{{ $tipoRecebimento->id }}" class="FormularioDelete">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="DELETE">
    <div class="mb-3 DescNegrito">
        Código: {{ $tipoRecebimento->id }}
    </div>
    <div class="mb-3 DescNegrito">
        Descrição: {{ $tipoRecebimento->descricao }}
    </div>

    <button type="submit" class="btn btn-primary btnTelaRemove">Remover</button>

</form>
</div>


@endsection