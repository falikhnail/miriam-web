@php
    $bg = null;
    $message = null;
@endphp

@if (Session::has('success'))
    @php
        $bg = 'bg-green-600';
        $message = session('success');
    @endphp
@elseif (Session::has('error'))
    @php
        $bg = 'bg-red-600';
        $message = session('error');
    @endphp
@elseif (Session::has('warning'))
    @php
        $bg = 'bg-yellow-600';
        $message = session('warning');
    @endphp
@elseif (Session::has('info'))
    @php
        $bg = 'bg-blue-600';
        $message = session('info');
    @endphp
@endif

@if ($bg)
    <div id="notification" class="fixed bottom-3 right-2">
        <div class="{{ $bg }} text-white py-2 px-3 rounded-lg">
            <div class="flex items-center">
                <h2 class="flex-1 w-1/2 font-bold">Notifikasi</h2>
                <button class="absolute top-0 right-2 bg-transparent" onclick="hideNotification()">
                    <i class="fa-solid fa-x fa-xs"></i>
                </button>
            </div>
            <div class="border-t-0 my-1 h-[1px] bg-neutral-100 opacity-100 dark:opacity-50"></div>
            <p class="text-xs mt-1">{{ $message }}</p>
        </div>
    </div>
    <script>

        function hideNotification() {
            let close = document.getElementById('notification')
            close.classList.add("hidden");
        }
    </script>
@endif
