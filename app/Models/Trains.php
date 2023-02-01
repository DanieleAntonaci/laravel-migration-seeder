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

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setPlace_of_departure($place_of_departure){
        $this->place_of_departure = $place_of_departure;
    }
    public function getPlace_of_departure(){
        return $this->place_of_departure;
    }public function setDeparture_time($departure_time){
        $this->departure_time = $departure_time;
    }
    public function getDeparture_time(){
        return $this->departure_time;
    }public function setPlace_of_arrival($place_of_arrival){
        $this->place_of_arrival = $place_of_arrival;
    }
    public function getPlace_of_arrival(){
        return $this->place_of_arrival;
    }public function setArrival_time($arrival_time){
        $this->arrival_time = $arrival_time;
    }
    public function getArrival_time(){
        return $this->arrival_time;
    }public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }public function setTrain_code($train_code){
        $this->train_code = $train_code;
    }
    public function getTrain_code(){
        return $this->train_code;
    }public function setOwner_company($owner_company){
        $this->owner_company = $owner_company;
    }
    public function getOwner_company(){
        return $this->owner_company;
    }
}
