@extends('backend.layouts.app')

@section('title')
    {{ 'Schedule' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Schedule Dokter & Kuota" subtitle="Daftar Schedule Dokter & Kuota Pasien" />
        <div class="my-10 shadow-lg rounded px-6 py-5 bg-white">
            {{-- <div class="flex flex-row">
                <div class="flex items-center space-x-3">
                    <a href="javascript:;" class="btn btn-primary" id="btn-tambah">Tambah</a>
                </div>
            </div> --}}
            <div class="flex flex-col w-full h-1/2 my-10">
                <div id="calendar"></div>
            </div>
        </div>
        <x-modal id="modal" height="" width="w-2/5">
            <button type="button" class="hidden" id="btn-show-modal" @click="openModal = true"></button>
            <x-slot name="modalheader">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-2xl" id="tittle-modal">Tambah Schedule</h1>
                    <button id="btn-delete-schedule" class="btn btn-sm-danger hidden">Hapus Schedule</button>
                </div>
            </x-slot>
            <x-slot name="modalcontent" x-data="{ model: {} }">
                <div class="flex flex-col gap-2">
                    <form class="form" id="form-detail" method="POST">
                        @csrf
                        <input type="hidden" name="tanggal">
                        <div class="flex mb-6">
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="dokter">
                                    Nama Dokter
                                </label>
                                <select name="dokter" id="dokter" class="main-input" required>
                                    <option value="" disabled selected>Pilih Dokter</option>
                                    @foreach ($dokter as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex mb-6">
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="kuota">
                                    Kuota
                                </label>
                                <input type="number" class="main-input" id="kuota" name="kuota"
                                    x-model.number="model.kuota" required>
                            </div>
                        </div>
                        {{-- <div class="flex mb-6">
                            <div class="w-1/2 px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="jam_mulai">
                                    Jam Mulai
                                </label>
                                <div class="timepicker-ui">
                                    <input type="text" class="main-input" id="jam_mulai" name="jam_mulai">
                                </div>
                            </div>
                            <div class="w-1/2 px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="jam_selesai">
                                    Jam Selesai
                                </label>
                                <input type="text" class="main-input timepicker-ui" id="jam_selesai" name="jam_selesai">
                            </div>
                        </div> --}}
                        <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </x-slot>
        </x-modal>
    </div>
@endsection

@push('after-scripts')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
@endpush

@push('after-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker-ui/2.3.0/timepicker-ui.umd.js"
        integrity="sha512-a3QUlKZYbhDBhA0b++tX+QjrbEwk1DNTyCR7rzwM34AUx16sNOLDzh4JQhqV5xYLs010+xsnFjrDjz2jx2+qLw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: "id",
                height: 700,
                initialView: 'dayGridMonth',
                selectable: true,
                stickyFooterScrollbar: true,
                //handleWindowResize: true,
                editable: true,
                dayMaxEvents: true,
                fixedWeekCount: true,
                expandRows: true,
                allDaySlot: false,
                events: @json($schedule),
                dateClick: function(info) {
                    //console.log('clicked date', info.resource);

                    $("#form-detail").get(0).reset();

                    $("#tittle-modal").text("Tambah Schedule").append(
                        `<span>  ${moment(info.dateStr).format('DD/MM/YYYY')}</span>`)

                    // * form data
                    $('#form-detail input[name="_method"]').remove()
                    $("#form-detail").attr("action", "{{ route('backend.schedule.store') }}")

                    $('input[name="tanggal"]').val(moment(info.dateStr).format("YYYY-MM-DD"))

                    $("#btn-delete-schedule").removeAttr('data-id')
                    $("#btn-delete-schedule").removeAttr('data-tanggal')
                    $("#btn-delete-schedule").hide()

                    $("#btn-show-modal").trigger('click')
                },
                eventClick: function(info) {
                    //console.log('clicked event', info)
                    const event = info.event
                    const range = event._instance.range
                    const data = event.extendedProps

                    $("#tittle-modal").text("Edit Schedule").append(
                        `<span>  ${moment(range.start).format('DD/MM/YYYY')}</span>`)

                    // * form data
                    const updateRoute = "{{ route('backend.schedule.update', ':id') }}".replace(":id",
                        event._def.publicId);

                    $("#form-detail").prepend(`{{ method_field('PUT') }}`)
                    $("#form-detail").attr("action", updateRoute)

                    $('input[name="tanggal"]').val(moment(range.start).format("YYYY-MM-DD"))
                    $("#dokter").val(data.dokter_id)
                    $("#kuota").val(data.kuota)

                    $("#btn-delete-schedule").attr('data-id', event._def.publicId)
                    $("#btn-delete-schedule").attr('data-tanggal', moment(range.start).format(
                        'DD/MM/YYYY'))
                    $("#btn-delete-schedule").show()

                    $("#btn-show-modal").trigger('click')
                },
                headerToolbar: {
                    left: "dayGridMonth,listWeek",
                    center: "title",
                    right: "today,prev,next"
                },
                buttonText: {
                    today: "Hari Ini",
                    listWeek: 'Tampilan Daftar',
                    dayGridMonth: "Tampilan Kalender"
                }
            });

            calendar.updateSize();
            calendar.render();

            $("#modal").addClass("z-[1000]")
        });

        $("#btn-tambah").click(() => {
            Swal.fire("Still on develop!!!");
        })

        function initTimePicker() {
            const DOMElement = document.querySelector(".timepicker-ui");
            const options = {
                clockType: '24h',
                backdrop: true,
                focusTrap: true,
                delayHandler: 100,
                mobile: true,
                hourMobileLabel: 'Jam',
                minuteMobileLabel: 'Menit',
            };
            const timepicker = new tui.TimepickerUI(DOMElement, options);
            timepicker.create();
        }

        $("#btn-delete-schedule").click(() => {
            Swal.fire({
                title: "Hapus Schedule?",
                text: `Hapus Schedule ${$("#btn-delete-schedule").attr('data-tanggal')}?`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    const route = `{{ route('backend.schedule.destroy', ':id') }}`.replace(':id', $(
                        "#btn-delete-schedule").attr('data-id'))
                    deleteLinked(route, "{{ csrf_token() }}")
                }
            });
        })
    </script>
@endpush
