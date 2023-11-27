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

    <ul class="flex items-center w-28 px-3">
        <li>
            <a href="#" class="flex items-center">
                <i class="fa-solid fa-right-from-bracket me-2"></i>
                Logout
            </a>
        </li>
    </ul>
</div>
