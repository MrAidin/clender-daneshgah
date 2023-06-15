{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>How to Use Fullcalendar in Laravel 8</title>--}}

{{--    <meta name="csrf-token" content="{{ csrf_token() }}"/>--}}

{{--    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"/>--}}
{{--    <script src="{{asset('/js/jquery.js')}}"></script>--}}
{{--    <link rel="stylesheet" href="{{asset('/css/calendar.css')}}"/>--}}
{{--    <script src="{{asset('/js/moment.js')}}"></script>--}}
{{--    <script src="{{asset('/js/calendar.min.js')}}"></script>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@4.4.2/packages/core/main.css" rel="stylesheet" />--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@4.4.2/packages/timeline/main.css" rel="stylesheet" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@4.4.2/packages/core/main.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@4.4.2/packages/timeline/main.js"></script>--}}

{{--    </head>--}}
{{--<style>--}}
{{--    /* استایل‌های مورد نیاز برای نمای تایم‌لاین */--}}
{{--    #MyCalendar {--}}
{{--        width: 100%;--}}
{{--        height: 600px;--}}
{{--    }--}}
{{--</style>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            hdhdh--}}
{{--            <div id="MyCalendar"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--</body>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}

{{--        var calendar = $('#MyCalendar').fullCalendar({--}}
{{--            editable: true,--}}
{{--            initialView: 'resourceTimeline',--}}
{{--            header: {--}}
{{--                left: 'prev,next today',--}}
{{--                center: 'title',--}}
{{--                right: 'month,agendaWeek,agendaDay'--}}
{{--            },--}}
{{--            events: '/full-calendar',--}}
{{--            selectable: true,--}}
{{--            selectedHelper: true,--}}
{{--            select: function (start, end, allday) {--}}
{{--                var title = prompt('Event Title:');--}}
{{--                if (title) {--}}
{{--                    var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');--}}
{{--                    var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');--}}

{{--                    $.ajax({--}}
{{--                        url: "/full-calendar/action",--}}
{{--                        type: "post",--}}
{{--                        data: {--}}
{{--                            title: title,--}}
{{--                            start: start,--}}
{{--                            end: end,--}}
{{--                            type: 'add'--}}
{{--                        },--}}
{{--                        success: function (data) {--}}
{{--                            calendar.fullCalendar('refetchEvents');--}}
{{--                            alert('event successfully');--}}
{{--                        }--}}

{{--                    })--}}

{{--                }--}}
{{--            },--}}
{{--            editable: true,--}}
{{--            eventResize: function (event, delta) {--}}
{{--                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');--}}
{{--                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');--}}
{{--                var title = event.title;--}}
{{--                var id = event.id;--}}
{{--                $.ajax({--}}
{{--                    url: "/full-calendar/action",--}}
{{--                    type: "post",--}}
{{--                    data: {--}}
{{--                        title: title,--}}
{{--                        start: start,--}}
{{--                        end: end,--}}
{{--                        id: id,--}}
{{--                        type: 'update'--}}
{{--                    },--}}
{{--                    success: function (data) {--}}
{{--                        calendar.fullCalendar('refetchEvents');--}}
{{--                        alert('event successfully updated');--}}
{{--                    }--}}

{{--                });--}}

{{--            },--}}
{{--            eventDrop: function (event, delta) {--}}
{{--                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');--}}
{{--                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');--}}
{{--                var title = event.title;--}}
{{--                var id = event.id;--}}
{{--                $.ajax({--}}
{{--                    url: "/full-calendar/action",--}}
{{--                    type: "post",--}}
{{--                    data: {--}}
{{--                        title: title,--}}
{{--                        start: start,--}}
{{--                        end: end,--}}
{{--                        id: id,--}}
{{--                        type: 'update'--}}
{{--                    },--}}
{{--                    success: function (data) {--}}
{{--                        calendar.fullCalendar('refetchEvents');--}}
{{--                        alert('event successfully updated');--}}
{{--                    },--}}


{{--                });--}}
{{--            },--}}
{{--            eventClick: function (event) {--}}
{{--                if (confirm("Are you sure you want to remove it?")) {--}}
{{--                    var id = event.id;--}}
{{--                    $.ajax({--}}
{{--                        url: "/full-calendar/action",--}}
{{--                        type: "POST",--}}
{{--                        data: {--}}
{{--                            id: id,--}}
{{--                            type: "delete"--}}
{{--                        },--}}
{{--                        success: function (response) {--}}
{{--                            calendar.fullCalendar('refetchEvents');--}}
{{--                            alert("Event Deleted Successfully");--}}
{{--                        }--}}
{{--                    })--}}
{{--                }--}}
{{--            }--}}


{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    // ایجاد تقویم تایم‌لاین با استفاده از FullCalendar--}}
{{--    --}}{{--$(document).ready(function() {--}}
{{--    --}}{{--    $('#MyCalendar').fullCalendar({--}}
{{--    --}}{{--        header: {--}}
{{--    --}}{{--            left: 'prev,next today',--}}
{{--    --}}{{--            center: 'title',--}}
{{--    --}}{{--            right: 'timelineDay,timelineThreeDays'--}}
{{--    --}}{{--        },--}}
{{--    --}}{{--        views: {--}}
{{--    --}}{{--            timelineThreeDays: {--}}
{{--    --}}{{--                type: 'timeline',--}}
{{--    --}}{{--                duration: { days: 3 }--}}
{{--    --}}{{--            }--}}
{{--    --}}{{--        },--}}
{{--    --}}{{--        defaultView: 'timelineDay',--}}
{{--    --}}{{--        events: [--}}
{{--    --}}{{--                @foreach($events as $event)--}}
{{--    --}}{{--            {--}}
{{--    --}}{{--                title: '{{ $event->title }}',--}}
{{--    --}}{{--                start: '{{ $event->start }}',--}}
{{--    --}}{{--                end: '{{ $event->end }}'--}}
{{--    --}}{{--            },--}}
{{--    --}}{{--            @endforeach--}}
{{--    --}}{{--        ]--}}
{{--    --}}{{--    });--}}
{{--    --}}{{--});--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}
{{--        var calendarEl = document.getElementById('calendar');--}}

{{--        var calendar = new FullCalendar.Calendar(calendarEl, {--}}
{{--            schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',--}}
{{--            plugins: ['timeline'],--}}
{{--            headerToolbar: {--}}
{{--                left: 'prev,next today',--}}
{{--                center: 'title',--}}
{{--                right: 'timelineDay,timelineThreeDays'--}}
{{--            },--}}
{{--            views: {--}}
{{--                timelineThreeDays: {--}}
{{--                    type: 'timeline',--}}
{{--                    duration: { days: 3 }--}}
{{--                }--}}
{{--            },--}}
{{--            initialView: 'timelineDay',--}}
{{--            events: [--}}
{{--                @foreach($events as $event)--}}
{{--                {--}}
{{--                    title: '{{ $event->title }}',--}}
{{--                    start: '{{ $event->start }}',--}}
{{--                    end: '{{ $event->end }}'--}}
{{--                },--}}
{{--                @endforeach--}}
{{--            ]--}}
{{--        });--}}

{{--        calendar.render();--}}
{{--    });--}}
{{--</script>--}}

{{--</html>--}}

    <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>جدول زمانی</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .highlight {
            background-color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th></th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th>
        </tr>
        </thead>
        <tbody>
        @php
            $events_arr = [];
           $events = \App\Models\Event::all();
           foreach ($events as $key => $item) {
               if ($key != 0 && $events[--$key]->title == $item->title){

                   $events_arr[$item->title][] = [
                       'start' => $events[$key]->start,
                       'end' => $events[$key]->end,
];
               }else{
                    $events_arr[$item->title][] = [
                           'start' => $item->start,
                           'end' => $item->end
                       ];
               }
           }

         dd($events_arr);
        @endphp
        @foreach ($events_arr as $title => $events)
            <tr>
                <td colspan="{{ count($events) }}">{{ $title }}</td>
                @foreach ($events as $key => $event)
                    @if ($key != 0 && $events[$key - 1]['end'] == $event['start'])
                        <td>{{ $event['start'] }}</td>
                        <td>{{ $event['end'] }}</td>
                    @else
            </tr><tr>
                <td>{{ $event['start'] }}</td>
                <td>{{ $event['end'] }}</td>
                @endif
                @endforeach
            </tr>
        @endforeach



        {{--        @php--}}
        {{--            $events = \App\Models\Event::all();--}}
        {{--            $titles = $events->pluck('title')->unique();--}}
        {{--            $colspan = 0 ;--}}
        {{--        @endphp--}}
        {{--        @foreach($titles as $title)--}}
        {{--            <tr>--}}
        {{--                <th>{{ $title }}</th>--}}
        {{--                @php--}}
        {{--                    $filteredEvents = $events->where('title', $title);--}}
        {{--$i = 0;--}}
        {{--                @endphp--}}

        {{--                @for($hour = 8; $hour <= 21; $hour++)--}}
        {{--                    @if(array_key_exists($i,$filteredEvents->toArray()))--}}
        {{--                        @dd(\Carbon\Carbon::parse($filteredEvents[$I]->start)->hour , $hour)--}}
        {{--                        @if(\Carbon\Carbon::parse($filteredEvents[$i++]->start)->hour == $hour)--}}
        {{--                            @dd('d')--}}
        {{--                            <td colspan="3">--}}
        {{--                        @else--}}
        {{--                            <td>--}}
        {{--                        @endif--}}
        {{--                    @else--}}
        {{--                        <td>--}}
        {{--                    @endif--}}
        {{--                        @foreach($filteredEvents as $event)--}}
        {{--                            @php--}}
        {{--                                $start = \Carbon\Carbon::parse($event->start);--}}
        {{--                                $end = \Carbon\Carbon::parse($event->end);--}}
        {{--                            @endphp--}}

        {{--                            @if($start->hour <= $hour && $end->hour >= $hour)--}}
        {{--                                {{ $hour }}:00--}}
        {{--                                @break--}}
        {{--                            @endif--}}
        {{--                        @endforeach--}}
        {{--                    </td>--}}
        {{--                @endfor--}}
        {{--            </tr>--}}
        {{--        @endforeach--}}

        {{--        @php--}}
        {{--            $events = \App\Models\Event::all();--}}
        {{--            $titles = $events->pluck('title')->unique();--}}
        {{--            dd($titles);--}}
        {{--        @endphp--}}
        </tbody>
    </table>
</div>
</body>
</html>


