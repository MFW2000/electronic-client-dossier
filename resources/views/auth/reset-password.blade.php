<x-guest-layout>
    <div class="reset-password card m-auto">
        <div class="card-body">
            <form method="post" action="{{ route('password.store') }}">
                @csrf
        
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" :messages="$errors->get('email')" />
                    <x-input-error :messages="$errors->get('email')" />
                </div>
        
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password" :messages="$errors->get('password')" />
                    <x-input-error :messages="$errors->get('password')" />
                </div>
        
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" :messages="$errors->get('password_confirmation')" />
                    <x-input-error :messages="$errors->get('password_confirmation')" />
                </div>
        
                <x-primary-button class="float-end">{{ __('Reset Password') }}</x-primary-button>
            </form>
        </div>
    </div>
</x-guest-layout>
