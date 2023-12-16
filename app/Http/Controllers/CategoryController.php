<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createCategory(Request $request)
    {
        if ($request->method() == 'GET') {
            $Categries = Category::get();

            return view('pages.addCategory', compact('Categries'));
        }
        if ($request->method() == 'POST') {

            $validator = $request->validate([
                'title' => ['required', 'string', 'max:255'],
            ]);

            Category::create([
                'title' => $request->title,
            ]);

            return redirect()->route('getCategory')->with('success', 'Category Create Successfuly');
        }
    }

    public function getCategory()
    {
        $Categorys = Category::get();
        return view('pages.categories', compact('Categorys'));
    }



    public function editCategory($id)
    {
        $Category = Category::where('id', $id)->first();

        return view('pages.editCategory', compact('Category'));

    }

    public function updateCategory(Request $request)
    {


        $validator = $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);


        $createCategory = Category::find($request->id)->update([
            'title' => $request->title,
        ]);

        return redirect()->route('getCategory')->with('success', 'Category Update Successfuly');
    }


    public function deleteCategory(Request $request)
    {
        $Category = Category::where('id', $request->id)->delete();

        return redirect()->route('getCategory')->with('delete', 'Category deleted Successfuly');

    }
}
