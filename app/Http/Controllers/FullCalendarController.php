<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FullCalendarController extends Controller
{

    public function index(Request $request)
    {
//        if ($request->ajax()) {
//            $data = Event::whereDate('start', '>=', $request->start)
//                ->whereDate('end', '<=', $request->end)
//                ->get(['id', 'title', 'start', 'end']);
//            return response()->json($data);
//        }

//        return $events;
//        $titles = $events->pluck('title')->unique();


        $data = [];
        $times = [];

        $events = Event::all();

        foreach ($events as $key => $event){

            if (isset($data[$event->code]))
            {
                $data[$event->code][] = [
                    'title' => $event->title,
                    'start' => $event->start,
                    'end' => $event->end,
                ];
                $times[]= $event->start;
                $times[]= $event->end;
            }else{
                $data[$event->code][] = [
                    'title' => $event->title,
                    'start' => $event->start,
                    'end' => $event->end,
                ];
                $times[]= $event->start;
                $times[]= $event->end;
            }

        }
        $times = array_unique($times);

//        return $data;
        return view('full-calendar',compact(['data','times']));
    }


    public function action(Request $request)
    {
        if ($request->ajax()) {
            if ($request->type == "add") {
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
            }

            if ($request->type == "update") {
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
            }
            if($request->type == 'delete')
            {
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            }

        }
    }


    public function getData(Request $request)
    {
        $events = Event::all();
        return response()->json($events);
    }
}
