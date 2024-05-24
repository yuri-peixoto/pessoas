@extends('users.layouts.app')

@section('title', 'Criar Novo Usuário')

@section('header')
<h1 class="text-lg text-black-500">Novo Usuário</h1>
@endsection

@section('content')

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @include('users.partials.form')
</form>

@endsection
