<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="vezeteknev" :value="__('Vezetéknév')" />
            <x-text-input id="vezeteknev" class="block mt-1 w-full" type="text" name="vezeteknev" :value="old('vezeteknev')" required autofocus autocomplete="vezeteknev" />
            <x-input-error :messages="$errors->get('vezeteknev')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="keresztnev" :value="__('Keresztnév')" />
            <x-text-input id="keresztnev" class="block mt-1 w-full" type="text" name="keresztnev" :value="old('keresztnev')" required autofocus autocomplete="keresztnev" />
            <x-input-error :messages="$errors->get('keresztnev')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Jelszó')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Jelszó megerősítése')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Már regisztrált?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Regisztráció') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
