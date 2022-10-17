
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="font-bold">Todos os Produtos</h1>
<a class="bg-green-400 p-1 rounded-md" href="{{ route('products.create') }}">Adicionar novo produto</a>

<form class = "py-2" action="{{ route('products.index') }}" method="get">
    <input class="border-2 border-black" type="text" name="search" placeholder="Pesquisar">
    <button class="bg-green-400 p-1 rounded-md font-medium">Pesquisar</button>
</form>

<table class="table-auto rounded-md w-full bg-blue-50">
    <thead class="table-header-group bg-blue-100">
        <tr class="table-row">
            <th class="table-cell text-left">Nome</th>
            <th class="table-cell text-left">Descrição</th>
            <th class="table-cell text-left">Preço</th>
            <th class="table-cell text-left">Ação</th>
        </tr>
    </thead>
    <tbody class="table-row-group">
        @foreach ($products as $product)
            <tr class="table-row">
                <td class="table-cell">
                    {{ $product->name }}
                </td>
                <td class="truncate text-sm max-w-prose">
                    {{ $product->description }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td class="p-1">
                    <a class = "bg-yellow-300 p-1 rounded-md" href="{{ route('products.edit', $product->id) }}">Editar</a>
                    | <a class = "bg-blue-300 p-1 rounded-md" href="{{ route('products.show', $product->id) }}">Detalhes</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection


