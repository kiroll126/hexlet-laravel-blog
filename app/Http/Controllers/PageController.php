<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(): object
    {
        return view('page.about');
    }
}
