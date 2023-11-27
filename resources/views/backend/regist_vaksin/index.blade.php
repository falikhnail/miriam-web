@extends('backend.layouts.app')

@section('title')
    {{ 'Vaksin' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Registrasi Vaksin" subtitle="Daftar Pasien Registrasi Vaksin" />
        <div class="my-10 shadow-lg rounded px-6 py-5 bg-white">
            {{-- <livewire:backend.vaksin-table /> --}}
            <div class="flex flex-row">
                <div class="flex items-center space-x-3">
                    <a href="{{ route('backend.pasien.vaksin.create') }}" class="btn btn-primary">Tambah</a>
                    {{-- <button class="btn btn-primary" id="btn-import">Import Excel</button>
                    <button class="btn btn-primary" id="btn-export">Export Excel</button> --}}
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
                    x-transition:enter-start="transform translate-y-full" x-transition:enter-end="transform translate-y-0"
                    x-transition:leave="transition-transform ease-in duration-500"
                    x-transition:leave-start="transform translate-y-0" x-transition:leave-end="transform translate-y-full">
                    <div class="w-1/2 flex flex-wrap items-center justify-start gap-4">
                        <div class="container-input-group" data-te-datepicker-init>
                            <span>
                                <i class="fa-regular fa-calendar fa-xs"></i>
                            </span>
                            <input id="tgl_schedule" type="text" class="input-sm" placeholder="Tanggal Schedule">
                            <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
                                data-te-datepicker-toggle-button-ref></div>
                        </div>
                        <div class="container-input-group" data-te-datepicker-init>
                            <span>
                                <i class="fa-regular fa-calendar fa-xs"></i>
                            </span>
                            <input id="tgl_registrasi" type="text" class="input-sm" placeholder="Tanggal Registrasi">
                            <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
                                data-te-datepicker-toggle-button-ref></div>
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-wrap items-center justify-end gap-4">
                        <div class="container-input-group">
                            <span>
                                <i class="fa-solid fa-magnifying-glass fa-xs"></i>
                            </span>
                            <input id="search_nama_anak" type="text" class="input-sm" placeholder="Cari Nama Anak">
                        </div>
                        <div class="container-input-group">
                            <span>
                                <i class="fa-solid fa-magnifying-glass fa-xs"></i>
                            </span>
                            <input id="search_alamat" type="text" class="input-sm" placeholder="Cari Alamat">
                        </div>
                        <div class="container-input-group">
                            <span>
                                <i class="fa-solid fa-magnifying-glass fa-xs"></i>
                            </span>
                            <input id="search_no_hp" type="text" class="input-sm" placeholder="Cari No. Handphone">
                        </div>
                    </div>
                </div>
            </div>
            <table id="datatable" class="min-w-full text-center text-sm font-light">
                <thead class="border-b font-medium text-center">
                    <th>No</th>
                    <th>Nama Anak</th>
                    <th>Alamat</th>
                    <th>Vaksin</th>
                    <th>Schedule</th>
                    <th>No. Hp</th>
                    <th>Registrasi</th>
                    <th>#</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatable/datatables.min.css') }}">
@endpush

@push('after-scripts')
    <script type="text/javascript" src="{{ asset('assets/vendor/datatable/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/datatable/custom-datatable.js') }}"></script>
    <script type="text/javascript">
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
                url: '{{ route('backend.pasien.vaksin.list') }}',
                data: function(d) {
                    d.nama_anak = $("#search_nama_anak").val();
                    d.tgl_schedule = $("#tgl_schedule").val();
                    d.tgl_registrasi = $("#tgl_registrasi").val();
                    d.alamat = $("#search_alamat").val();
                    d.no_hp = $("#search_no_hp").val();
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
                    data: 'alamat',
                    name: 'alamat',
                    className: "text-left"
                },
                {
                    data: 'vaksin',
                    name: 'vaksin',
                    className: "text-center"
                },
                {
                    data: 'schedule',
                    name: 'schedule',
                    className: "text-center"
                },
                {
                    data: 'no_hp',
                    name: 'no_hp',
                    className: "text-center"
                },
                {
                    data: 'created',
                    name: 'created',
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

        $("body").on("click", "#datatable tbody tr #wa", function(e) {
            e.preventDefault();
            var row = table.row($(this).closest('tr')).data();
            //console.log(row);
            wa(row.no_hp, `Selamat pagi / siang / malam ${row.nama_orang_tua}`)
        });

        var wto;

        $('#tgl_schedule').on('input', function() {
            clearTimeout(wto);
            wto = setTimeout(() => {
                table.draw();
            }, 500);
        });

        $('#tgl_registrasi').on('input', function() {
            clearTimeout(wto);
            wto = setTimeout(() => {
                table.draw();
            }, 500);
        });


        $('#search_no_hp').on('change', function() {
            clearTimeout(wto);
            wto = setTimeout(() => {
                table.draw();
            }, 500);
        });

        $('#search_nama_anak').on('change', function() {
            clearTimeout(wto);
            wto = setTimeout(() => {
                table.draw();
            }, 500);
        });

        $('#search_alamat').on('change', function() {
            clearTimeout(wto);
            wto = setTimeout(() => {
                table.draw();
            }, 500);
        });
    </script>
@endpush
