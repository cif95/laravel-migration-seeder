<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where( 'departure_date', '>=', date('y-m-d') )
        ->orderBy('departure_date', 'asc')
        ->get();
        return view('trains.index', compact('trains'));
    }
}
