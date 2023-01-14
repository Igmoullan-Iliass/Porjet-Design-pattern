<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendv;

class CalendarController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  public function index()
    //  {
    //      return view('technicienne.calendar');
    //  }

     public function index(Request $request)
     {
         if($request->ajax()) {
             $data = Rendv::whereDate('event_start', '>=', $request->start)
                 ->whereDate('event_end',   '<=', $request->end)
                 ->get(['id', 'username', 'event_start', 'event_end']);
             return response()->json($data);
         }
         return view('technicienne.calendar');
     }

     public function calendarEvents(Request $request)
     {

         switch ($request->type) {
            case 'create':
               $event = Rendv::create([
                   'username' => $request->username,
                   'event_start' => $request->event_start,
                   'event_end' => $request->event_end,
               ]);

               return response()->json($event);
              break;

            case 'edit':
               $event = Rendv::find($request->id)->update([
                   'username' => $request->username,
                   'event_start' => $request->event_start,
                   'event_end' => $request->event_end,
               ]);

               return response()->json($event);
              break;

            case 'delete':
               $event = Rendv::find($request->id)->delete();

               return response()->json($event);
              break;

            default:
              # ...
              break;
         }
     }
}
