    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Nome')" />
        <x-text-input id="name" name="name" type="text" value="{{ $user->name ?? old('name') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('E-mail')" />
        <x-text-input id="email" name="email" type="email" value="{{ $user->email ?? old('email') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" name="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Avatar -->
    <div class="mt-4">
        <x-input-label for="avatar" :value="__('Avatar')" />
        <input id="avatar" type="file" name="avatar" class="mt-1 block w-full">
        <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
    </div>

    <button type="submit" class="mt-4 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Cadastrar</button>
