<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public function resume()
    {
        return view('pages.apps.resume');
    }

    public function create()
    {
        return view('pages.apps.create');
    }

    public function details($id)
    {
        return view('pages.apps.details', compact('id'));
    }

}
