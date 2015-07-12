<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    protected $fillable = [
        'name',
        'added_by',
    ];

    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }
}
