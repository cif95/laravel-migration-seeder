<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all()->sortBy('departure_date');
        return view('trains.index', compact('trains'));
    }
}
