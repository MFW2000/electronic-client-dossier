<x-guest-layout>
    <div class="verify-email card m-auto">
        <div class="card-body">
            <div class="mb-3">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') === 'verification-link-sent')
                <x-alert :message="__('A new verification link has been sent to the email address you provided during registration.')" variant="success"/>
            @endif

            <div class="d-flex justify-content-between">
                <form method="post" action="{{ route('verification.send') }}">
                    @csrf

                    <x-button>{{ __('Resend Verification Email') }}</x-button>
                </form>

                <form method="post" action="{{ route('logout') }}">
                    @csrf

                    <x-button variant="link">{{ __('Log Out') }}</x-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
