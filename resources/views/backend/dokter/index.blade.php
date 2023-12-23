@extends('backend.layouts.app')

@section('title')
    {{ 'Dokter' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Dokter RSIA" subtitle="Daftar Dokter RSIA" />
        <x-modal height="" width="w-2/5">
            <button type="button" class="hidden" id="btn-show-modal" @click="openModal = true"></button>
            <div class="my-10 shadow-lg rounded px-6 py-5 bg-white">
                <div class="flex flex-row">
                    <div class="flex items-center space-x-3">
                        @can('add_dokter')
                            <a href="javascript:;" class="btn btn-primary" id="btn-tambah">Tambah</a>
                        @endcan
                        {{-- <button class="btn btn-primary" id="btn-import">Import Excel</button> --}}
                    </div>
                </div>
                <div class="flex flex-col my-6" x-data="{ expanded: true }">
                    <div class="flex items-center space-x-3">
                        <button type="button" class="text-2xl font-bold" @click="expanded = !expanded">
                            Filter
                            <i class="fa-solid fa-chevron-down fa-xs"></i>
                        </button>
                    </div>
                    <div class="flex flex-wrap items-start mt-3 w-full" x-show="expanded" x-collapse
                        -transition:enter="transition-transform ease-in-out duration-500"
                        x-transition:enter-start="transform translate-y-full"
                        x-transition:enter-end="transform translate-y-0"
                        x-transition:leave="transition-transform ease-in duration-500"
                        x-transition:leave-start="transform translate-y-0"
                        x-transition:leave-end="transform translate-y-full">
                        <div class="w-1/2 flex flex-wrap items-center justify-start gap-4">
                            <div class="container-input-group">
                                <span>
                                    <i class="fa-solid fa-magnifying-glass fa-xs"></i>
                                </span>
                                <input id="search_nama" type="text" class="input-sm" placeholder="Cari Nama">
                            </div>
                        </div>
                        <div class="w-1/2 flex flex-wrap items-center justify-end gap-4">
                        </div>
                    </div>
                </div>
                <table id="datatable" class="min-w-full text-center text-sm font-light">
                    <thead class="border-b font-medium text-center">
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Status</th>
                        <th>#</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <x-slot name="modalheader">
                    <h1 class="font-bold text-2xl" id="tittle-modal">Detail Data Dokter</h1>
                </x-slot>
                <x-slot name="modalcontent">
                    <div class="flex flex-col gap-2">
                        <form class="form" id="form-detail" method="POST">
                            @csrf
                            <div class="flex mb-6">
                                <div class="w-full px-3">
                                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama">
                                        Nama Dokter
                                    </label>
                                    <input class="main-input" id="nama" name="nama" type="text">
                                </div>
                            </div>
                            <div class="flex mb-6">
                                <div class="w-full px-3">
                                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="status">
                                        Status
                                    </label>
                                    <select class="main-input" id="status" name="status">
                                        <option value="" selected disabled>Pilih Status</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Non-Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </x-slot>
            </div>
        </x-modal>
    </div>
@endsection
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatable/datatables.min.css') }}">
@endpush

@push('after-scripts')
    <script type="text/javascript" src="{{ asset('assets/vendor/datatable/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/datatable/custom-datatable.js') }}"></script>
    <script type="text/javascript">
        const canUpdate = `{{ Auth::user()->can('edit_dokter') }}` == 1
        const canDelete = `{{ Auth::user()->can('delete_dokter') }}` == 1
        const canAdd = `{{ Auth::user()->can('add_dokter') }}` == 1

        let table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: true,
            responsive: true,
            "searching": false,
            responsive: true,
            'language': {
                "loadingRecords": "&nbsp;",
                "processing": '<i class="fa-solid fa-spinner fa-spin fa-lg"></i>',
                "info": "Menampilkan _START_ - _END_ dari _TOTAL_ Data",
                "paginate": {
                    "next": '<i class="fa-solid fa-angle-right"></i>',
                    "previous": '<i class="fa-solid fa-angle-left"></i>'
                }

            },
            ajax: {
                url: '{{ route('backend.dokter.list') }}',
                data: function(d) {
                    d.nama = $("#search_nama").val();

                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-center"
                },
                {
                    data: 'nama',
                    name: 'nama',
                    className: "text-left"
                },
                {
                    data: 'status',
                    name: 'status',
                    className: "text-center"
                },
                {
                    data: 'action',
                    name: 'action',
                    className: "text-center"
                },
            ],
            ordering: false,
            lengthChange: false,
        });

        $("#btn-tambah").click(() => {
            $("#form-detail").get(0).reset();
            $("#btn-show-modal").trigger('click')
            setModalData()
        })

        $("body").on("click", "#datatable tbody tr #edit-action-default", function(e) {
            e.preventDefault();
            var row = table.row($(this).closest('tr')).data();
            //console.log(row);
            $("#btn-show-modal").trigger('click')
            setModalData(row)
        });

        @can('delete_dokter')
            $("body").on("click", "#datatable tbody tr #delete-action-default", function(e) {
                e.preventDefault();
                const row = table.row($(this).closest('tr')).data();
                Swal.fire({
                    title: "Hapus Dokter?",
                    text: `Hapus Dokter ${row.nama}?`,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus",
                    showLoaderOnConfirm: true,
                    /* preConfirm: () => {
                        return new Promise(function(resolve, reject) {
                            // here should be AJAX request
                            setTimeout(function() {
                                resolve();
                            }, 5000);
                        });
                    } */
                }).then((result) => {
                    if (result.isConfirmed) {
                        deleteDokter(row)
                    }
                });
            });
        @endcan

        var wto;

        $('#search_nama').on('change', function() {
            clearTimeout(wto);
            wto = setTimeout(() => {
                table.draw();
            }, 500);
        });

        function setModalData(data, title) {
            $("#form-detail").get(0).reset();
            if (data) {
                $("#tittle-modal").text("Detail Dokter")
                $("#nama").val(data.nama)
                $("#status").val(data.status.includes("1") ? "1" : "0")

                @can('edit_dokter')
                    const updateRoute = "{{ route('backend.dokter.update', ':id') }}".replace(":id", data.id);
                    $("#form-detail").prepend(`{{ method_field('PUT') }}`)
                    $("#form-detail").attr("action", updateRoute)
                @endcan

            } else {
                $("#tittle-modal").text("Tambah Dokter")
                $('#form-detail input[name="_method"]').remove()

                @can('add_dokter')
                    $("#form-detail").attr("action", "{{ route('backend.dokter.store') }}")
                @endcan
            }
        }

        @can('delete_dokter')
            function deleteDokter(data) {
                var form =
                    $('<form>', {
                        'method': 'POST',
                        'action': "{{ route('backend.dokter.destroy', ':id') }}".replace(":id", data.id)
                    });

                var token =
                    $('<input>', {
                        'type': 'hidden',
                        'name': '_token',
                        'value': '{{ csrf_token() }}'
                    });

                var hiddenInput =
                    $('<input>', {
                        'name': '_method',
                        'type': 'hidden',
                        'value': 'DELETE'
                    });

                form.append(token, hiddenInput).appendTo('body');
                form.submit()
            }
        @endcan
    </script>
@endpush
