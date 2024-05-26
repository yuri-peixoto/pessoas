@extends('users.layouts.app')

@section('title', 'Listagem de Usuários')

@section('header')
    @include('users.partials.header', compact('users'))
@endsection

@section('content')
    @include('users.partials.content', compact('users'))

    {{-- Pagination links --}}
    {{ $users->links() }}
@endsection
