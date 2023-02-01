<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        // $movies= movies::all();
        // $data= [
        //     'movies'=> $movies
        // ];
        return view('pages.app'
        // , $data
    );
    }
}
