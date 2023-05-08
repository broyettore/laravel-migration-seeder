<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        
        $trainList = Train::all();
        $trainToday = Train::where("Departure_Time", ">=", date('Y-m-d H:i:s'))->get();

        return view("home", compact("trainList", "trainToday"));
    }
}
