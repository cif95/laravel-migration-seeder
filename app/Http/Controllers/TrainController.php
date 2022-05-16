<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }


    /** 
    * Creates a new train instance
    *
    * @param [date] $departure_date
    * @param [string] $company
    * @param [string] $departure_station
    * @param [string] $arrival_station
    * @param [time] $departure_time
    * @param [time] $arrival_time
    * @param [string] $train_code
    * @param [int] $wagons
    * @param [boolean] $is_onScheduled
    * @param [boolean] $is_cancelled
    * @return void
    */
    public function createNewTrain(
        $departure_date, $company, $departure_station,
        $arrival_station, $departure_time, $arrival_time,
        $train_code, $wagons, $is_onScheduled, $is_cancelled) 
        {
            $newTrain = new Train();
            $newTrain->fill(
                [
                    'departure_date' => $departure_date,
                    'company' => $company,
                    'departure_station' => $departure_station,
                    'arrival_station' => $arrival_station,
                    'departure_time' => $departure_time,
                    'arrival_time' => $arrival_time,
                    'train_code' => $train_code,
                    'wagons' => $wagons,
                    'is_onScheduled' => $is_onScheduled,
                    'is_cancelled' => $is_cancelled
                ]
                );
            $newTrain->save();
    }
}
