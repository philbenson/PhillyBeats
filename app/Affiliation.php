<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model {

	protected $fillable = [
        'name',
        'city',
        'website'
    ];

    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
}
