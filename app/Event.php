<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $fillable = [
        'name',
        'venue_id',
        'date',
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

    public function genres()
    {
        return $this->hasManyThrough('App\Genre', 'App\Artist');
    }

    public function promoters()
    {
        return $this->belongsToMany('App\Promoter');
    }

    public function venue()
    {
        return $this->hasOne('App\Venue');
    }
}
