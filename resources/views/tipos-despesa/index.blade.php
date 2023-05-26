@extends('templates.main')

@section('content')
<h1 class='TitleDespesas'>Tipos de Despesa</h1>
<div class="ContainerBtnDespesas"><a class="btn btn-primary  BtnTypeDespesa" href="/tipos-despesa/create" role="button">Novo</a></div>



@if (count($tiposDespesa) > 0)
<div class="ContainerMain">
<table class="table ContainerTable">
        <thead>
            <tr class="Cabecalho">
                <th scope="col">Código</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="ContainerBody">
            @foreach($tiposDespesa as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->descricao }}</td>
                <td class="BtnsRemoveEdit">
                    <a class="btn btn-primary BtnEdit " 
                        href="/tipos-despesa/{{ $t->id }}/edit" 
                        role="button">Editar</a>
                    <a class="btn btn-primary BtnRemove material-symbols-outlined" 
                        href="/tipos-despesa/{{ $t->id }}" 
                        role="button" alt="Remover" title="Remover">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endif

@endsection