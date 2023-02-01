<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $trains= Trains::all();
        $data= [
            'trains'=> $trains
        ];
        return view('pages.app'
        , $data
    );
    }
    public function addTrain(){
        $newTrain = new Trains();

        $newTrain -> place_of_departure = 'Torino';
        $newTrain -> departure_time = '9:00:00';
        $newTrain -> departure_date = '2022-01-25';
        $newTrain -> place_of_arrival = 'Roma';
        $newTrain -> arrival_time = '13:00:00';
        $newTrain -> arrival_date = '2022-01-25';
        $newTrain -> price = '40';
        $newTrain -> train_code = 'UHUDE7WHG2';
        $newTrain -> owner_company = 'Tranitalia';

        $newTrain->save();
    }
}
