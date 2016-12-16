@extends('layouts.app')

@section('head')
    <link href="/css/fullcalendar.min.css" rel="stylesheet">
    <link href='/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href="/css/mainStyle.css" rel="stylesheet">
    <script src='/js/moment.min.js'></script>
    <script src='/js/jquery.min.js'></script>
    <script src="/js/fullcalendar.min.js"></script>
    <style>
        .title {
            width:50%;
            margin: 0 auto;
            text-align: center;
            font-size: 48pt;
        }
    </style>
@endsection

@section('content')
    <div class="title">
        This is a test page
    </div>
@endsection