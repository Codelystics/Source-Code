<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = DB::table('events')
                ->join('organizers', 'events.organizer_id', '=', 'organizers.id')
                ->select(
                        '*',
                    'events.name as event_name',
                    'organizers.name as organizer_name',
                    DB::raw("DATE_FORMAT(start, '%M') as start_month"),
                    DB::raw('DAY(start) as start_day'),
                )
                ->orderBy("start","asc")
                ->paginate(6);
        return view("Home.index", compact(["datas"]));
    }

   
}
