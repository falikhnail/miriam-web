<div class="flex flex-col items-center w-full shadow-lg rounded px-6 py-5 bg-white mt-10 mb-5">
    <div class="flex items-center justify-between w-full">
        <h1 class="font-bold text-xl">Schedule</h1>
        <a href="{{ route('backend.schedule.index') }}" class="btn btn-sm">Selengkapnya</a>
    </div>
    <div id="calendar" class="min-w-full mt-5"></div>
</div>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: "id",
            height: 400,
            initialView: 'listWeek',
            dayMaxEvents: true,
            fixedWeekCount: true,
            expandRows: true,
            events: @json($schedule),
            headerToolbar: {
                left: "",
                center: "title",
                right: ""
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
                    div.setAttribute('data-id', data.schedule)
                    div.setAttribute('data-dokter-id', data.dokter_id)
                    div.setAttribute('data-nama-dokter', data.dokter)
                    div.setAttribute('data-kuota', data.kuota)

                    var h3Kuota = document.createElement('h3')
                    h3Kuota.classList.add('text-md')
                    h3Kuota.innerText = title

                    var ulDokter = document.createElement('ul')
                    ulDokter.classList.add('flex')
                    ulDokter.classList.add('flex-col')

                    var listDokter = ``;
                    if (typeof data === 'object' && data.dokter !== null) {
                        var liDokter = document.createElement('li')
                        liDokter.classList.add('text-sm')
                        liDokter.innerText = `- ${data.dokter}`
                        ulDokter.append(liDokter)
                    }

                    div.append(h3Kuota)
                    div.append(ulDokter)
                    //console.log('div', div)

                    return {
                        //html: `<div class="p-2"></div>`
                        domNodes: [div]
                    };
                },
        });

        calendar.render();
    });
</script>
