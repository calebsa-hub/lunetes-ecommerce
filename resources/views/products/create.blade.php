@extends('layouts.app')

@section('title', 'Novo produto')

@section('content')
<h1 class="font-bold">Cadastro de novo produto</h1>

@include('includes.validations-form')

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @include('products._partials.form')
</form>
@endsection

