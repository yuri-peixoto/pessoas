@extends('users.layouts.app')

@section('title', 'Detalhes do usuário' . $user->name)

@section('header')
<h1 class="text-lg text-black-500">Detalhes do usuário: {{ $user->name }}</h1>
@endsection

@section('content')
<div class="bg-white shadow p-4">
    <h2 class="text-xl font-bold">{{ $user->name }}</h2>

    <p class="text-gray-500">Status: {{ $user->email }}</p>

    @if ($user->avatar)
        <p class="text-gray-500">Avatar:</p>
        <img src="{{ asset('storage/'.$user->avatar) }}" alt="{{ $user->name }}" class="w-32 h-32 object-cover rounded-full">
    @endif

    {{-- <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="mt-4 flex justify-between">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Excluir</button>

        <a href="{{ route('home') }}" class="text-blue-500">Voltar</a>
    </form> --}}
</div>
@endsection
