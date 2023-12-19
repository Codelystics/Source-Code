<?php

namespace App\Http\Controllers;

use Carbon\Traits\Options;
use Illuminate\Http\Request;

use App\Models\Bootcamp;
use App\Models\Competition;
use App\Models\Event;

class EventHandlerController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required', 
            'details'=> 'required',
            'price'=> 'required|numeric',
            'capacity' => 'required|integer',
            'type'=>'required',
            'start' => 'required|date|after:tomorrow',
            'end'=> 'required|date|after:event-start',
            'venue'=> 'required',
            'banner'=> 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'organizer_id' => 'required',
        ]);

        $banner = $request->banner->store(options: 'public');

        if($request->type == 'event'){
            $newEvent = Event::create($data);
        }
        else if($request->category == 'bootcamp'){
            $newEvent = Bootcamp::create($data);
        }
        else if($request->type == 'competition'){
            $newEvent = Competition::create($data);
        }

        return(redirect(route('event.index')));
    }
}
