<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        return back();

    }
}
