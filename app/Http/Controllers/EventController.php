<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Place;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createEvent(Request $request)
    {
        if ($request->method() == 'GET') {
            $Categries = Place::get();

            return view('pages.addEvent', compact('Categries'));
        }
        if ($request->method() == 'POST') {



            $validator = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'date' => ['required'],
                'time' => ['required'],
                'description' => ['required'],
                'place_id' => ['required'],
                'photo' => ['required'],
            ]);



            $image = $request->photo;
            $destinationPathImg = public_path('assets/events/');
            if (!$image->move($destinationPathImg, $image->getClientOriginalName())) {
                return 'Error saving the file.';
            }

            $image = $image->getClientOriginalName();

            Event::create([
                'date' => $request->date,
                'title' => $request->name,
                'time' => $request->time,
                'description' => $request->description,
                'place_id' => $request->place_id,
                'photo' => $image
            ]);

            return redirect()->route('getEvent')->with('success', 'Event Create Successfuly');
        }
    }

    public function getEvent()
    {


      
        $Events = Event::get();
        return view('pages.Events', compact('Events'));
    }



    public function editEvent($id)
    {
        $Event = Event::where('id', $id)->first();

        $Categries = Place::get();

        return view('pages.editEvent', compact('Event', 'Categries'));

    }

    public function updateEvent(Request $request)
    {


        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'time' => ['required'],
            'description' => ['required'],
            'place_id' => ['required'],
        ]);


        $createEvent = Event::find($request->id)->update([
            'date' => $request->date,
            'title' => $request->name,
            'time' => $request->time,
            'description' => $request->description,
            'place_id' => $request->place_id,
        ]);

        return redirect()->route('getEvent')->with('success', 'Event Update Successfuly');
    }


    public function deleteEvent(Request $request)
    {
        $Event = Event::where('id', $request->id)->delete();

        return redirect()->route('getEvent')->with('delete', 'Event deleted Successfuly');

    }
}
