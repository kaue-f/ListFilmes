<x-guest-layout>
    <x-auth-card>
        @section('Yggdrasil', __('Login'))

    <x-form action="{{ route('login') }}">

        @include('errors.messages')
        
        <x-input icon="user" right-icon="pencil" name="email" :label="__('Email')" placeholder="Email" style="margin-block: 1rem"/>{{ old('email') }}
        <x-inputs.password name="password" :label="__('Password')" type="password" value="" style="margin-block: 0.5rem"/>

        <div class="flex justify-between">
            <p><a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a></p>
            @if (Route::has('register'))
                <p><a href="{{ route('register') }}">{{ __('Register') }}</a></p>
            @endif
        </div>

        <p>
            <x-form.submit class="justify-center w-full btn btn-primary">Login</x-form.submit>
        </p>

    </x-form>
    </x-auth-card>

</x-guest-layout>
