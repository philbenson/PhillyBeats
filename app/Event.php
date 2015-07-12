<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $fillable = [
        'name',
        'venue',
        'address',
        'start_date',
        'end_date',
        'door_time',
        'show_time',
        'end_time',
        'price',
        'website',
        'facebook',
        'added_by',
    ];

    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }

    public function promoters()
    {
        return $this->belongsToMany('App\Promoter');
    }
}
