@extends('layouts.main')

@section('content')

    <h1>Home</h1>

    <style>
        #calendar {
            width: 80%; /* set width of the calendar */
            margin: auto; /* center horizontally */
        }
        .fc-daygrid-day.fc-day {
            background-color: #FBCBC0;
        }
    </style>


    <div id='calendar'></div>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/locales/et.js'></script>
   

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridWeek',
                height: 'auto',
                contentHeight: 'auto',
                timeZone: 'Europe/Tallinn' ,
                locale: 'et',
                firstDay: 1

            });
            calendar.render();
        });
    </script>
    


@endsection

@section('navbar')

    <!-- Navigation bar content here -->

@endsection
