@extends('users.layouts.app')

@section('title', 'Detalhes do usuário' . $user->name)

@section('header')
<h1 class="text-lg text-black-500">Detalhes do usuário: {{ $user->name }}</h1>
@endsection

@section('content')
<div class="bg-white shadow p-4">
    <h2 class="text-xl font-bold my-2">{{ $user->name }}</h2>

    <p class="text-gray-500">E-mail: {{ $user->email }}</p>

    @if ($user->avatar)
        <p class="text-gray-500 my-2">Avatar:</p>
        <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}" class="my-2 w-32 h-32 object-cover rounded-full">
    @endif

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="mt-4 flex justify-between">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Excluir</button>

        <a href="{{ route('users.index') }}" class="text-blue-500">Voltar</a>
    </form>
</div>
@endsection
