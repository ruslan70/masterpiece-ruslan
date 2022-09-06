<nav x-data="{ open: false }" class="body_color border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="h5 pt-4 pb-3 space-y-1 text-center">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4 text-center">
                <h5 class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</h5>
                <div class="h5 font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="h5 mb-3 mt-3 space-y-1 text-center">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>