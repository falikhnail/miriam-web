<div class="text-center">
    @if (Auth::user()->can('view_' . $module) || Auth::user()->can('delete_' . $module))
        @can('view_' . $module)
            @if (isset($editRoute))
                <a class="px-2 py-1 bg-primary rounded mx-1" title="Update" href="{{ route($editRoute, [$data->id]) }}">
                    <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                </a>
            @else
                <a class="px-2 py-1 bg-primary rounded mx-1" title="Update" href="#" id="edit-action-default"
                    {{ isset($attributes) ? $attributes : null }}>
                    <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                </a>
            @endif
        @endcan
        @can('delete_' . $module)
            @if (isset($deleteRoute))
                <a class="px-2 py-1 bg-red-500 rounded mx-1" title="Delete" href="{{ route($deleteRoute, $data->id) }}"
                    data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="'Hapus Data?'">
                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                </a>
            @else
                <a class="px-2 py-1 bg-red-500 rounded mx-1" title="Delete" href="#" id="delete-action-default">
                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                </a>
            @endif
        @endcan
    @else
        <p class="text-sm font-bold">No Access</p>
    @endif
</div>
