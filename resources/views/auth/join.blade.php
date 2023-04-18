<x-guest-layout>
    <x-auth-card>
        @section('Yggdrasil', __('Join'))

    @include('errors.success')

    <p>{{ $user->invite->name }} {{ __('has invited you to join') }} {{ config('app.name') }}.</p>

    <x-form action="{{ route('join.update', ['id' => $user->id]) }}" method="put">

        <x-form.input type="text" :label="__('Name')" name="name">{{ $user->name }}</x-form.input>
        <x-form.input type="text" :label="__('Email')" disabled>{{ $user->email }}</x-form.input>
        <x-inputs.password type="password" :label="__('Password')" name='newPassword' value="" />
        <x-inputs.password type="password" :label="__('Confirm Password')" name='confirmPassword' value="" />

        <x-button>{{ __('Save Password') }}</x-button>

    </x-form>
    </x-auth-card>
</x-guest-layout>
