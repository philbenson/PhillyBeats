<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Promoter extends Model {

	protected $fillable = [
        'name',
        'city',
        'website',
        'user_id',
        'added_by',
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
