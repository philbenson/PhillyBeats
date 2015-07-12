<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

    protected $fillable = [
        'name',
        'city',
        'website',
        'soundcloud',
        'mixcloud',
        'bandcamp',
        'facebook',
        'twitter',
        'user_id',
        'added_by',
    ];

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function promoters()
    {
        return $this->belongsToMany('App\Promoter');
    }
}
