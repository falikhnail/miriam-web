@props([
    'id' => '',
    'height' => 'h-3/5',
    'width' => 'w-3/5',
    'zIndex' => '',
])
<div x-data="{ openModal: false, model: {} }" >
    {{-- <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline"
        @click="open = true">Open Modal</button> --}}
    {{ $slot }}
    <div id="{{ $id ?? 'global-modal' }}" role="dialog" aria-labelledby="modal1_label" aria-modal="true" tabindex="0"
        x-show="openModal"
        class="fixed top-0 left-0 w-full h-screen flex justify-center items-center {{ empty($zIndex) ? 'z-20' : $zIndex }} modal">
        <div aria-hidden="true" class="absolute top-0 left-0 w-full h-screen bg-black transition duration-300"
            :class="{ 'opacity-60': openModal, 'opacity-0': !openModal }" x-show="openModal"
            x-transition:leave="delay-150">
        </div>
        <div data-modal-document @click.stop="" x-show="openModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform scale-50 opacity-0"
            x-transition:enter-end="transform scale-100 opacity-100"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="transform scale-100 opacity-100"
            x-transition:leave-end="transform scale-50 opacity-0"
            class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white {{ $height }} {{ $width }} z-10">
            <div class="p-6 border-b">
                <div class="flex justify-between">
                    {{ $modalheader }}
                    <div class="hover:text-red-700">
                        <a href="javascript:;" @click="openModal = false" class="">
                            <i class="fa-solid fa-xmark fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                {{ $modalcontent }}
            </div>
        </div>
    </div>
</div>
