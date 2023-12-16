<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createPlace(Request $request)
    {
        if ($request->method() == 'GET') {
            $Categries = Place::get();

            return view('pages.addPlace', compact('Categries'));
        }
        if ($request->method() == 'POST') {

            $validator = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'plan' => ['required', 'string', 'max:255'],
            ]);

            Place::create([
                'plan' => $request->plan,
                'name' => $request->name,
            ]);

            return redirect()->route('getPlace')->with('success', 'Place Create Successfuly');
        }
    }

    public function getPlace()
    {
        $Places = Place::get();
        return view('pages.Places', compact('Places'));
    }



    public function editPlace($id)
    {
        $Place = Place::where('id', $id)->first();

        return view('pages.editPlace', compact('Place'));

    }

    public function updatePlace(Request $request)
    {


        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'plan' => ['required', 'string', 'max:255'],
        ]);


        $createPlace = Place::find($request->id)->update([
            'name' => $request->name,
            'plan' => $request->plan,
        ]);

        return redirect()->route('getPlace')->with('success', 'Place Update Successfuly');
    }


    public function deletePlace(Request $request)
    {
        $Place = Place::where('id', $request->id)->delete();

        return redirect()->route('getPlace')->with('delete', 'Place deleted Successfuly');

    }
}
