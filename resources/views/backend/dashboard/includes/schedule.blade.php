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
        });

        calendar.render();
    });
</script>
