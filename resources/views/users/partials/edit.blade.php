@extends('users.layouts.app')

@section('title', "Editar Usuário")

@section('header')
<h1 class="text-lg text-black-500">Usuário {{ $user->name }}</h1>
@endsection

@section('content')
<form action="{{ route('users.update', $user->name) }}" method="POST">
    @method('PUT')
    @include('users.partials.form', compact('support'))
</form>
@endsection
