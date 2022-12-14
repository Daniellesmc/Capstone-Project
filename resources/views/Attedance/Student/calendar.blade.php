<div class="container text-white max-w-6xl ml-32">
    <div class="response"></div>
    <div id='calendar'></div>

    {{--logs attendance in the calendar --}}


    <script>
        $(document).ready(function() {
            var SITEURL = window.location.origin;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#calendar').fullCalendar({
                eventSources: [{
                    url: 'http://localhost:8000/calendar',
                }],
                eventColor: '#378006',
            });
        });
    </script>
</div>
