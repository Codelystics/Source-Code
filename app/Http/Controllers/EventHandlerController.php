<?php

namespace App\Http\Controllers;

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
        // dd($request);
        $data = $request->validate([
            'title'=>'required', 
            'category'=>'required',
            'cover-banner'=> 'required|image',
            'description'=> 'required',
            'event-start' => 'required|date|after:tomorrow',
            'event-end'=> 'required|date|after:event-start',
            'quota' => 'required|numeric',
        ]);

        if($request->category == 'event'){
            $newEvent = Event::create($data);
        }
        else if($request->category == 'competition'){
            $newEvent = Competition::create($data);
        }
        else if($request->category == 'bootcamp'){
            $newEvent = Bootcamp::create($data);
        }

        return(redirect(route('events.index')));
    }
}
