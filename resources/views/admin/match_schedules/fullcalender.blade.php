@extends('user.layouts.master')

@section('content')

<h2 class="text-center mt-5">Tournament Calender</h2>
    <div id="calendar" class="m-5"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach ($matchSchedules as $matchSchedule)
                        {
                            title: '{{ $matchSchedule->team1->name }} vs {{ $matchSchedule->team2->name }}',
                            start: '{{ $matchSchedule->match_date }}',
                            // You can add more fields here like 'end', 'url', etc.
                        },
                    @endforeach
                ]
            });

            calendar.render();
        });
    </script>
@endsection
