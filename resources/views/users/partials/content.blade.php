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
                        @forelse ($users as $user)
                        <tr>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                @if ($user->avatar)
                                    <img src="{{ asset('storage/'.$user->avatar) }}" alt="{{ $user->name }}" class="w-10 h-10 rounded-full">
                                @else
                                    <span class="text-gray-500">No Avatar</span>
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
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5c4.97 0 9 3.03 9 6.75s-4.03 6.75-9 6.75S3 14.22 3 10.5 7.03 4.5 12 4.5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-sm font-medium whitespace-nowrap text-center text-gray-500 dark:text-gray-400">
                                Nenhum registro encontrado
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
