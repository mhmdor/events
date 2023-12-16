<?php

namespace App\Http\Controllers;

use App\Models\Nickname;
use Illuminate\Http\Request;

class NicknameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createNickname(Request $request)
    {
        if ($request->method() == 'GET') {
            $Categries = Nickname::get();

            return view('pages.addNickname', compact('Categries'));
        }
        if ($request->method() == 'POST') {

            $validator = $request->validate([
                'title' => ['required', 'string', 'max:255'],
            ]);

            Nickname::create([
                'title' => $request->title,
            ]);

            return redirect()->route('getNickname')->with('success', 'Nickname Create Successfuly');
        }
    }

    public function getNickname()
    {
        $Nicknames = Nickname::get();
        return view('pages.nicknames', compact('Nicknames'));
    }



    public function editNickname($id)
    {
        $Nickname = Nickname::where('id', $id)->first();

        return view('pages.editNickname', compact('Nickname'));

    }

    public function updateNickname(Request $request)
    {


        $validator = $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);


        $createNickname = Nickname::find($request->id)->update([
            'title' => $request->title,
        ]);

        return redirect()->route('getNickname')->with('success', 'Nickname Update Successfuly');
    }


    public function deleteNickname(Request $request)
    {
        $Nickname = Nickname::where('id', $request->id)->delete();

        return redirect()->route('getNickname')->with('delete', 'Nickname deleted Successfuly');

    }
}
