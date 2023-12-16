<?php

namespace App\Http\Controllers;

use App\Models\Sarname;
use Illuminate\Http\Request;

class SarnameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createSarname(Request $request)
    {
        if ($request->method() == 'GET') {
            $Categries = Sarname::get();

            return view('pages.addSarname', compact('Categries'));
        }
        if ($request->method() == 'POST') {

            $validator = $request->validate([
                'title' => ['required', 'string', 'max:255'],
            ]);

            Sarname::create([
                'title' => $request->title,
            ]);

            return redirect()->route('getSarname')->with('success', 'Sarname Create Successfuly');
        }
    }

    public function getSarname()
    {
        $Sarnames = Sarname::get();
        return view('pages.Sarnames', compact('Sarnames'));
    }



    public function editSarname($id)
    {
        $Sarname = Sarname::where('id', $id)->first();

        return view('pages.editSarname', compact('Sarname'));

    }

    public function updateSarname(Request $request)
    {


        $validator = $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);


        $createSarname = Sarname::find($request->id)->update([
            'title' => $request->title,
        ]);

        return redirect()->route('getSarname')->with('success', 'Sarname Update Successfuly');
    }


    public function deleteSarname(Request $request)
    {
        $Sarname = Sarname::where('id', $request->id)->delete();

        return redirect()->route('getSarname')->with('delete', 'Sarname deleted Successfuly');

    }
}
