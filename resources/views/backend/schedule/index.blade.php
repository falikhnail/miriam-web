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
                <div id="calendar" class="w-full"></div>
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
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="kuota">
                                    Kuota
                                </label>
                                <input type="number" class="main-input" id="kuota" name="kuota"
                                    x-model.number="model.kuota" required>
                            </div>
                        </div>
                        <div class="flex mb-6">
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="dokter">
                                    Nama Dokter
                                </label>
                                <select id="dokter" name="dokter[]" multiple required>
                                    {{-- <option value="" disabled selected>Pilih Dokter</option> --}}
                                    @foreach ($dokter as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                    @endforeach
                                </select>
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
        var calendarEl = document.getElementById('calendar');
        var scheduleArgs = {
            id: 0,
            kuota: 0,
            tanggal: '',
            dokter_id: []
        };

        document.addEventListener('DOMContentLoaded', function() {
            initCalendar()

            $("#dokter").select2({
                placeholder: 'Pilih Dokter',
            })
            $("#modal").addClass("z-[1000]")
        });

        function initCalendar() {
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: "id",
                height: 700,
                initialView: 'dayGridMonth',
                //initialView: 'dayGrid',
                selectable: true,
                stickyFooterScrollbar: true,
                handleWindowResize: true,
                editable: true,
                //dayMaxEvents: true,
                fixedWeekCount: true,
                expandRows: true,
                allDaySlot: false,
                eventOverlap: false,
                validRange: {
                    start: moment().format('YYYY-MM-DD'),
                    end: moment().add(1, 'month').format('YYYY-MM-DD')
                },
                events: @json($schedule),
                /* events: [{
                        title: 'Kuota 5',
                        start: moment().format('YYYY-MM-DD'),
                        dokter: ['dr. A', 'dr. B', 'dr. C',  'dr. D',  'dr. E',  'dr. F'],
                        id: 1
                    },
                    {
                        title: 'Long Event',
                        start: moment().add(1, 'day').format('YYYY-MM-DD'),
                        dokter: ['dr. A', 'dr. B', 'dr. C'],
                        id: 2
                    }
                ], */
                // * disabled select multiple
                selectOverlap: function(event) {
                    if (event.ranges && event.ranges.length > 0) {
                        return (event.ranges.filter(function(range) {
                            return (event.start.isBefore(range.end) &&
                                event.end.isAfter(range.start));
                        }).length) > 0;
                    } else {
                        return !!event && event.overlap;
                    }
                },
                eventDidMount: function(event) {
                    //console.log('event', event)
                },
                eventContent: function(args) {
                    const title = args.event.title;
                    const data = args.event.extendedProps;

                    //console.log('dokter', data.dokter_id.join(','))
                    //console.log('data', data)
                    //console.log('args', args)
                    //console.log('createElement', createElement)
                    var div = document.createElement('div')
                    div.classList.add('flex')
                    div.classList.add('flex-col')
                    div.setAttribute('id', 'event-schedule')
                    div.setAttribute('data-id', data.schedule_id)
                    div.setAttribute('data-dokter-id', data.dokter_id.join(',').toString())
                    div.setAttribute('data-nama-dokter', data.dokter.join(','))
                    div.setAttribute('data-kuota', data.kuota)

                    var h3Kuota = document.createElement('h3')
                    h3Kuota.classList.add('text-md')
                    h3Kuota.innerText = title

                    var ulDokter = document.createElement('ul')
                    ulDokter.classList.add('flex')
                    ulDokter.classList.add('flex-col')

                    var listDokter = ``;
                    if (typeof data === 'object' && typeof data.dokter === 'object' && data.dokter !== null) {
                        data.dokter.forEach((e) => {
                            var liDokter = document.createElement('li')
                            liDokter.classList.add('text-sm')
                            liDokter.innerText = `- ${e}`
                            ulDokter.append(liDokter)
                        })
                    }

                    div.append(h3Kuota)
                    div.append(ulDokter)
                    //console.log('div', div)

                    return {
                        //html: `<div class="p-2"></div>`
                        domNodes: [div]
                    };
                },
                dateClick: function(info) {
                    //console.log(info)
                    const element = info.jsEvent.srcElement.querySelector('.fc-event-main #event-schedule')
                    if (document.querySelectorAll('.fc-event-main').length > 0) {
                        scheduleArgs.id = element.getAttribute('data-id');
                        scheduleArgs.tanggal = info.dateStr;
                        scheduleArgs.kuota = element.getAttribute('data-kuota');
                        scheduleArgs.dokter_id = element.getAttribute('data-dokter-id').split(',');

                        edit()
                    } else {
                        scheduleArgs.id = null;
                        scheduleArgs.tanggal = info.dateStr;
                        scheduleArgs.kuota = null;
                        scheduleArgs.dokter_id = null;

                        add()
                    }
                },
                eventClick: function(info) {
                    const event = info.event
                    const range = event._instance.range
                    const data = event.extendedProps
                    console.log('data', data)

                    scheduleArgs.id = event._def.publicId;
                    scheduleArgs.tanggal = range.start;
                    scheduleArgs.kuota = data.kuota;
                    scheduleArgs.dokter_id = data.dokter_id;

                    edit()
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
        }

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

        @can('delete_schedule')
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
        @endcan

        function teMultiSelect() {
            const dokterSelect = document.querySelector("#dokter");
            const dokterSelectInstance = te.Select.getOrCreateInstance(dokterSelect, {
                multiple: true,
                selectAll: false,
                selectAllLabel: "Pilih Semua Dokter"
            });

            var options = Array.from(document.querySelectorAll('#dokter option'));
            dokterSelect.addEventListener('valueChange.te.select', function(e) {
                //console.log('event', e.value)
                $("#dokter_id").val(e.value)
            })
            dokterSelect.addEventListener('change', function(e) {
                console.log('event', e)
            })
        }

        function edit() {
            @can('edit_schedule')
                $("#tittle-modal").text("Edit Schedule").append(
                    `<span>  ${moment(scheduleArgs.tanggal).format('DD/MM/YYYY')}</span>`)

                // * form data
                const updateRoute = "{{ route('backend.schedule.update', ':id') }}".replace(
                    ":id",
                    scheduleArgs.id);

                $("#form-detail").prepend(`{{ method_field('PUT') }}`)
                $("#form-detail").attr("action", updateRoute)

                $('input[name="tanggal"]').val(moment(scheduleArgs.tanggal).format("YYYY-MM-DD"))

                $("#kuota").val(scheduleArgs.kuota)
                $("#dokter").val(scheduleArgs.dokter_id).trigger('change')
                console.log('schedule', scheduleArgs)

                $("#btn-delete-schedule").attr('data-id', scheduleArgs.id)
                $("#btn-delete-schedule").attr('data-tanggal', moment(scheduleArgs.tanggal).format(
                    'DD/MM/YYYY'))
                $("#btn-delete-schedule").show()

                $("#btn-show-modal").trigger('click')
            @endcan
        }

        function add() {
            @can('add_schedule')
                $("#form-detail").get(0).reset();

                $("#tittle-modal").text("Tambah Schedule").append(
                    `<span>  ${moment(scheduleArgs.tanggal).format('DD/MM/YYYY')}</span>`)

                // * form data
                $('#form-detail input[name="_method"]').remove()
                $("#form-detail").attr("action", "{{ route('backend.schedule.store') }}")

                $('input[name="tanggal"]').val(moment(scheduleArgs.tanggal).format("YYYY-MM-DD"))

                $("#btn-delete-schedule").removeAttr('data-id')
                $("#btn-delete-schedule").removeAttr('data-tanggal')
                $("#btn-delete-schedule").hide()

                $("#btn-show-modal").trigger('click')
            @endcan
        }
    </script>
@endpush
