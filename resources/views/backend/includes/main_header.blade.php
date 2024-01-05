<div class="fixed w-full flex items-center justify-between h-20 py-2 shadow-md bg-white z-10">
    {{-- z-index default for parent div = z-10 --}}
    <div class="flex items-center px-5">
        {{-- <button
            class="mt-10 inline-block rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
            id="slim-toggler" aria-haspopup="true">
            Toggle Slim
        </button> --}}
        <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia">
        <x-btn-menu />
    </div>
    <div class="flex items-center justify-end w-full">
        <div x-data="{ show: false }" class="dropdown" @mouseover="show = true" @mouseleave="show = false">
            <a href="#" class="avatar" @click="show = true">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu" x-show="show" x-cloak accesskey
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100">
                <div class="dropdown-item">
                    <h2 class="font-bold text-lg text-center">{{ auth()->user()->name }}</h2>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item">
                    <a href="{{ route('auth.admin.logout') }}" class="flex items-center"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('auth.admin.logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
