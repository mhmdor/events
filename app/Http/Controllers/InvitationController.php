<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Invitation;
use App\Models\Nickname;
use App\Models\Sarname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class InvitationController extends Controller
{
    public function createInvitation(Request $request)
    {
        if ($request->method() == 'GET') {

            $sarnames = Sarname::all();
            $nicknames = Nickname::all();
            $categories = Category::all();
            $events = Event::all();

            return view('pages.addInvitation', compact('sarnames', 'nicknames', 'categories', 'events'));
        }
        if ($request->method() == 'POST') {



            $validator = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'sarname_id' => ['required'],
                'nickname_id' => ['required'],
                'event_id' => ['required'],
                'category_id' => ['required'],
                'email' => ['required', 'string', 'max:255', 'unique:invitations'],
                'phone' => ['required', 'string', 'max:255', 'unique:invitations'],
                'position' => ['required', 'string', 'max:255'],
                'company' => ['required', 'string', 'max:255'],
                'status' => ['required', 'string', 'max:255'],
                'type' => ['required', 'string', 'max:255'],
            ]);





            $inv = Invitation::create([
                'sarname_id' => $request->sarname_id,
                'name' => $request->name,
                'nickname_id' => $request->nickname_id,
                'event_id' => $request->event_id,
                'category_id' => $request->category_id,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => $request->status,
                'type' => $request->type,
                'position' => $request->position,
                'company' => $request->company,
            ]);

            if ($inv->type == 'داخلي') {
                Mail::to($inv->email)->send(new Email());
            }

            return redirect()->route('getInvitation')->with('success', 'Invitation Create Successfuly');
        }
    }

    public function getInvitation()
    {
        $Invitations = Invitation::get();
        return view('pages.Invitations', compact('Invitations'));
    }



    public function editInvitation($id)
    {
        $Invitation = Invitation::where('id', $id)->first();

        $sarnames = Sarname::all();
        $nicknames = Nickname::all();
        $categories = Category::all();
        $events = Event::all();

        return view('pages.editInvitation', compact('Invitation', 'sarnames', 'nicknames', 'categories', 'events'));


    }

    public function updateInvitation(Request $request)
    {


        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sarname_id' => ['required'],
            'nickname_id' => ['required'],
            'event_id' => ['required'],
            'category_id' => ['required'],
            'email' => ['required', 'string', 'max:255', 'unique:invitations'],
            'phone' => ['required', 'string', 'max:255', 'unique:invitations'],
            'position' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ]);


        $createInvitation = Invitation::find($request->id)->update([
            'sarname_id' => $request->sarname_id,
            'name' => $request->name,
            'nickname_id' => $request->nickname_id,
            'event_id' => $request->description,
            'category_id' => $request->place_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'type' => $request->type,
            'position' => $request->position,
            'company' => $request->company,
        ]);

        return redirect()->route('getInvitation')->with('success', 'Invitation Update Successfuly');
    }


    public function deleteInvitation(Request $request)
    {
        $Invitation = Invitation::where('id', $request->id)->delete();

        return redirect()->route('getInvitation')->with('delete', 'Invitation deleted Successfuly');

    }
}
