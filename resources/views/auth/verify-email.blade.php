<x-guest-layout>
    <div class="verify-email card m-auto">
        <div class="card-body">
            <div class="mb-3">
                {{ __('auth.verify_email.context') }}
            </div>

            @if (session('status') === 'verification-link-sent')
                <x-alert :message="__('auth.verify_email.success')" variant="success"/>
            @endif

            <div class="d-flex justify-content-between">
                <form method="post" action="{{ route('verification.send') }}">
                    @csrf

                    <x-button>{{ __('auth.verify_email.submit') }}</x-button>
                </form>

                <form method="post" action="{{ route('logout') }}">
                    @csrf

                    <x-button variant="link">
                        {{ __('common.log_out') }}
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
