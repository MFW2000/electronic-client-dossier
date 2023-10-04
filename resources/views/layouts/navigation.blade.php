<nav>
    <div>
        <div>
            <a href="{{ route('dashboard') }}">LOGO</a>
        </div>

        <div>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
    </div>

    {{-- TODO: Was settings dropdown, refactor. --}}
    <div>
        <button>{{ Auth::user()->name }}</button>

        <a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>

        <form method="post" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
</nav>
