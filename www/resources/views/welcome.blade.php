@extends('layouts.app')
@section('head')
    <script src='/js/moment.min.js'></script>
    <script src='/js/jquery.min.js'></script>
    <script src="/js/fullcalendar.min.js"></script>
@endsection

@section('content')
    <script>

        $(document).ready(function() {

            $('#skema').fullCalendar({
                editable: true,
                weekends: false,
                navLinks: true,
                height: 500,
                defaultView: 'basicWeek',
                eventLimit: true
            });

        });

    </script>
    <div class="container" id="skema"></div>
@endsection