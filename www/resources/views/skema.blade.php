@extends('layouts.app')
@section('head')
    <script src='/js/moment.min.js'></script>
    <script src='/js/jquery.min.js'></script>
    <script src="/js/fullcalendar.min.js"></script>
    <script src="/js/da.js"></script>
@endsection

@section('content')
    <script>

        $(document).ready(function() {

            $('#skema').fullCalendar({
                header: {
                    left: 'month,basicWeek,basicDay',
                    center: 'title',
                    right: 'today,prev,next'
                },
                views: {
                    month: {
                        titleFormat: 'MMMM YYYY'
                    },
                    day: {
                        titleFormat: 'D MMMM YYYY'
                    }
                },
                editable: true,
                weekends: false,
                navLinks: true,
                height: 500,
                defaultView: 'basicWeek',
                eventLimit: true,
                events: [
                    {
                        title: 'All Day Event',
                        start: '2016-12-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2016-12-07',
                        end: '2016-12-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-12-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-12-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-12-11',
                        end: '2016-12-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-12-12T10:30:00',
                        end: '2016-12-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2016-12-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-12-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2016-12-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2016-12-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2016-12-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2016-12-28'
                    }
                ]
            });

        });

    </script>
<div class="container" id="skema"></div>
@endsection