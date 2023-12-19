<?php

namespace App\Http\Controllers;

use Carbon\Traits\Options;

use App\Models\Event;
use App\Models\Organizer;
use App\Models\Bootcamp;
use App\Models\Competition;
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

    public function create()
    {
        return view('Event.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required', 
            'details'=> 'required',
            'price'=> 'required|numeric',
            'capacity' => 'required|integer',
            'main_type' => 'required',
            'type'=>'required',
            'start' => 'required|date|after:tomorrow',
            'end'=> 'required|date|after:event-start',
            'venue'=> 'required',
            'banner'=> 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'organizer_id' => 'required',
        ]);

        $banner = $request->banner->store(options: 'public');

        if($request->main_type == 'event'){
            $newEvent = Event::create($data);
        }
        else if($request->main_type == 'bootcamp'){
            $newEvent = Bootcamp::create($data);
        }
        else if($request->main_type == 'competition'){
            $newEvent = Competition::create($data);
        }

        return(redirect(route('Home.index')));
    }

}
