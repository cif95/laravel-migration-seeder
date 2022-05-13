<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'departure_date',
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'wagons',
        'is_onScheduled',
        'is_cancelled'
    ];
}
