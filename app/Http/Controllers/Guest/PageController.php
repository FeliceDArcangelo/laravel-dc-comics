<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $comics = Comic::all();
        return view('home', compact('comics'));
    }
}
