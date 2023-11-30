<div class="text-center">
    @can('view_' . $module)
        <a class="px-2 py-1 bg-primary rounded mx-1" title="Lihat Detail" href="{{ route($viewRoute, [$data->id]) }}">
            <i class="fa-regular fa-eye" style="color: white;"></i>
        </a>
    @endcan
    <a class="px-2 py-1 bg-emerald-500 rounded mx-1" title="WhatsApp" href="javascript:void(0)" id="wa">
        <i class="fa-brands fa-whatsapp" style="color: white;"></i>
    </a>
    @can('edit_' . $module)
        <a class="px-2 py-1 bg-primary rounded mx-1" title="Lihat Detail" href="{{ route($editRoute, [$data->id]) }}">
            <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
        </a>
    @endcan
</div>
