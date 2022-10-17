@extends('layouts.app')

@section('title', 'Listagem de produto')

@section('content')
<h1 class="font-semibold">Listagem do produto</h1>

<div class="py-2">
    <ul>
        <li class="font-medium">Nome: <span class="font-normal">{{ $product->name }}</span></li>
        <li class="font-medium">Descrição: <span class="font-normal">{{ $product->description }}</span></li>
        <li class="font-medium">Preço: <span class="font-normal">{{ $product->price }}</span></li>
        <li class="font-medium">Criado em: <span class="font-normal">{{ $product->created_at }}</span></li>
    </ul>
</div>


<form action="{{ route('products.delete', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="bg-red-400 rounded-md p-2 font-medium" type="submit">Deletar</button>
</form>

@endsection

