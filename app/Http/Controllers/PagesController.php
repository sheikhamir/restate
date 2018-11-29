<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $h1_title = 'Welcome to Homepage';
        //return view('pages.index', compact( 'h1_title' ));
        return view('pages.index')->with('title', $h1_title);
    }


    public function about() {
        return view('pages.about');
    }
    public function services() {
        $data = array(
            'title' => 'Our Services',
            'services' => 'We provide awesome gaming equipments!'
        );
        return view('pages.services')->with($data);
    }
}
