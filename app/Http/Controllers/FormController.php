<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('create');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:500',
        ]);
        Form::create($validatedData);
        return response()->json('Data is successfully stored');
    }

    public function show()
    {
        $posts = Form::all();
        return view('show',  compact('posts'));
    }
}
