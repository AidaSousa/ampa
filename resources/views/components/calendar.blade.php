<div>
    <h2>Calendario de eventos</h2>
    <div id="calendar"></div>
</div>
<script src="{{ mix('js/app.js') }}"></script>


@push('scripts')
<script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js">
</script>

<script>

      document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: @json($events)
        });
        calendar.render();
      });

    </script>
@endpush
