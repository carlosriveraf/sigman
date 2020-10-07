<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name='DNI' value="74415678">
            <br>
            <input type="text" name='password' value="74415678">
            <br>
            <input type="text" name="password_confirmation" value="74415678">
            <br>
            <input type="text" name="apellidoPaterno" value="Rivera">
            <br>
            <input type="text" name="apellidoMaterno" value="Franco">
            <br>
            <input type="text" name="nombres" value="Carlos Eduardo">
            <br>
            <input type="date" name="fechaNacimiento" value="2020-11-22">
            <br>
            <input type="text" name="sexo" value="H">
            <br>
            <input type="text" name="telefono" value="4565099">
            <br>
            <input type="text" name="celular" value="982907877">
            <br>
            <input type="email" name="email" value="carlos_2017_1@hotmail.com">
            <br>
            <input type="text" name="direccion" value="Jr. San Martín 3609">

            <!-- <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div> -->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
