<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('Admin.index') }}">
            <x-application-logo style="height: 32px; width:auto;" />
        </a>

        <!-- Toggler (hamburger) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto">
                @if(Auth::check() && Auth::user()->role == 'admin')
                <li class="nav-item">
                    <x-nav-link href="{{route('Admin.index')}}" :active="request()->routeIs('Admin.index')" :href="route('Admin.index')">
                       {{ Auth::user()->role }} {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="{{route('Admin.index')}}" :active="request()->routeIs('Admin.index')" :href="route('Admin.index')">
                        {{ __('Manage-Room') }}
                    </x-nav-link>
                </li>
                @elseif(Auth::check() && Auth::user()->role == 'user')
                <li class="nav-item">
                    <x-nav-link href="{{route('Users.user')}}" :active="request()->routeIs('Users.user')" :href="route('Users.user')">
                       {{ Auth::user()->name }} {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
        
                <li class="nav-item">
                    <x-nav-link href="{{route('Users.user')}}" :active="request()->routeIs('Users.user')" :href="route('Users.user')">
                      {{ __('Room Booking') }}
                    </x-nav-link>
                </li>
                @endif
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ms-auto">
                <!-- Dropdown User -->
                <x-dropdown>
                    <x-slot name="trigger">
                        {{ Auth::user()->name }}
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </ul>
        </div>
    </div>
</nav>
