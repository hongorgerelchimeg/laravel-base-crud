<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicHomeController extends Controller
{
    public function index() {
        $comics = Comic::paginate(15);
            // dd($);
            return view('home', ['comics' => $comics] );
    }
}
