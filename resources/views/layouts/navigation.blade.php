<nav class="navbar navbar-expand-lg bg-white shadow">
    <div class="container-fluid">
        <a class="navbar-brand p-0" href="{{ route('dashboard') }}">
            <x-application-logo height="40"/>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar_supported_content"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar_supported_content">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <i class="bi bi-speedometer"></i>
                        <span>{{ __('dashboard.title') }}</span>
                    </x-nav-link>
                </li>

                @if (Auth::user()->is_admin)
                    <li class="nav-item">
                        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                            <i class="bi bi-person-badge"></i>
                            <span>{{ __('users.title') }}</span>
                        </x-nav-link>
                    </li>
                @endif
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('profile.title') }}</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="post" action="{{ route('logout') }}">
                                @csrf

                                <x-button class="dropdown-item" variant="link">{{ __('common.log_out') }}</x-button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
