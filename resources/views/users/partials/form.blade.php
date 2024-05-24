    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Nome')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('E-mail')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Avatar -->
    <div class="mt-4">
        <x-input-label for="avatar" :value="__('Avatar')" />
        <input id="avatar" type="file" name="avatar" class="mt-1 block w-full">
        <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
    </div>

    <button type="submit">Cadastrar</button>
