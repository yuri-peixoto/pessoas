<div class="sm:flex sm:justify-between sm:items-center">
    <div>
        <div class="flex items-center gap-x-3">
            <h1 class="text-xl text-black-700">Usuários</h1>

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
