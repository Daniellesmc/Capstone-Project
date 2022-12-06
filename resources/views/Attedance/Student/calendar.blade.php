<div class="container">
    <div class="response"></div>
    <div id='calendar'></div>


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
                    display: 'background'

                }],
                eventColor: '#378006',
            });
        });
    </script>
</div>
