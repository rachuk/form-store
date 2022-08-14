<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{

    public Form $forms;

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:300',
        ]);
        Form::create($validatedData);
        $forms = DB::table('forms')->select('name','email', 'message','created_at')->get();
        return view('show',compact('forms'));
    }
}

