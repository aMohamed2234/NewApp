<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
       $events = Event::all();
        return view('events' , compact('events'));
    }

    public function create()
    {

        return view('create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|string|max:255',
            'location'=> 'required|string|max:50'
        ]);

        Event::create($request->all());
        return redirect('/events')->with('success', 'Event created succesfully');
    }

    
}
