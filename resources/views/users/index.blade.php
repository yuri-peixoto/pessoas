@extends('users.layouts.app')

@section('title', 'Listagem de Usuários')

<div class="sm:flex sm:justify-between sm:items-center">
    <div>
        <div class="flex items-center gap-x-3">
            <h1 class="text-lg text-black-500">Usuários</h1>

            <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $users->total() }} usuários</span>
        </div>

        <div class="flex items-center mt-4 gap-x-3">
            <a href="{{ route('users.create') }}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Cadastrar Novo Usuário</span>
            </a>
        </div>
    </div>
</div>

@section('content')

<div class="flex flex-col mt-6 my-4">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Avatar
                            </th>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Nome
                            </th>

                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                E-mail
                            </th>

                            <th scope="col" class="relative py-3.5 px-4">
                                <span>Ações</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        @foreach ($users as $user)
                        <tr>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                @if ($user->avatar)
                                    <img src="{{ asset('storage/'.$user->avatar) }}" alt="{{ $user->name }}" class="w-10 h-10 rounded-full"> {{-- Adjust the image size and classes as needed --}}
                                @else
                                    <span class="text-gray-500">No Avatar</span> {{-- Placeholder text if no avatar is available --}}
                                @endif
                            </td>
                            <td class="px-12 py-2 text-sm font-medium whitespace-nowrap">
                                {{ $user->name }}
                            </td>
                            <td class="px-4 py-2 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                {{ $user->email }}
                            </td>

                            <td class="px-4 py-2 text-sm whitespace-nowrap flex">
                                <a href="{{ route('users.edit', $user->id) }}" class="mr-4 px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg">
                                    Editar
                                </a>
                                <a href="{{ route('users.show', $user->id) }}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
