@props([
    'title' => 'RSIA Miriam',
    'subtitle' => 'Daftar Data',
    'showBack' => false,
])
<div class="flex">
    @if ($showBack)
        <a href="{{ url()->previous() }}" class="me-3">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
        </a>
    @endif
    <div class="flex flex-col">
        <h1 id="section-title" class="text-gray-950 font-bold text-2xl">{{ $title }}</h1>
        <h3 id="section-subtitle">{{ $subtitle }}</h3>
    </div>
</div>
