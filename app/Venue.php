<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {

    protected $fillable = [
        'name',
        'address',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'user_id',
        'added_by',
    ];

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
}
