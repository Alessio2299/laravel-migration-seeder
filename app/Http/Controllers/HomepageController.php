<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Homepage() {
        $travels = Travel::all();
        return view('homepage', compact('travels'));
    }
}
