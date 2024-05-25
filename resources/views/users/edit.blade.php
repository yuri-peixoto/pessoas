@extends('users.layouts.app')

@section('title', "Editar Usuário")

@section('header')
<h1 class="text-lg text-black-500">Usuário: {{ $user->name }}</h1>
@endsection

@section('content')
<form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('users.partials.form', compact('user'))
</form>
@endsection
