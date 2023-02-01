<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    use HasFactory;
    private $id;
    private $place_of_departure;
    private $departure_time;
    private $place_of_arrival;
    private $arrival_time;
    private $price;
    private $train_code;
    private $owner_company;

 
}
