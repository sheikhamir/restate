<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function settings()
    {
        return view('user.settings');
    }

    public function search_history()
    {
        return view('user.search_history');
    }

    public function saved_searches()
    {
        return view('user.saved_searches');
    }


    public function viewed_properties()
    {
        return view('user.viewed_properties');
    }

    public function saved_properties()
    {
        return view('user.saved_properties');
    }

    public function favourites()
    {
        return view('user.favourites');
    }

    public function messages()
    {
        return view('user.messages');
    }
}
