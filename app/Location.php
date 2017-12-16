<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Location extends Model
{
    // protected $primaryKey = 'name';
    // public $incrementing = false;

    public function pointOfDepartureFor()
    {
        return $this->hasMany(Ticket::class, 'point_of_departure_id');
    }

    public function destinationFor()
    {
        return $this->hasMany(Ticket::class, 'destination_id');
    }
}
