<?php

namespace App\Http\Controllers;

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
            'Description' => 'required|max:255',
            'Date' => 'required|alpha_num',
            'Fee' => 'required|numeric',
        ]);
        \App\Form::create($validatedData);

        return response()->json('Form is successfully validated and data has been saved');
    }

    public function test()
    {
        return view('test');
    }
}
