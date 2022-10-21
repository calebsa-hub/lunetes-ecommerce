@extends('layouts.app')

@section('title', "Editar produto")

@section('content')
<h1 class="pb-2">Editando o produto {{ $product->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('products._partials.form')
</form>
@endsection

