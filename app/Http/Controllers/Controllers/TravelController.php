<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Travels;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index() {
        $travels= Travels::all();
        $data= [
            'travels'=> $travels
        ];
        return view('pages.travels'
        , $data
    );
    }
    public function addTravel(){
        $newTravel = new Travels();

        $newTravel -> place_of_departure = 'Torino';
        $newTravel -> place_of_arrival = 'Roma';
        $newTravel -> departure_date = '2022-01-25';
        $newTravel -> return_day = '2022-02-01';
        $newTravel -> info = 'hotel Cristal';
        $newTravel -> price = '600';
  

        $newTravel->save();
    }}
