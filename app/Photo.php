<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';

    protected $fillable = [
        'file'
    ];

    //make accessor - attribute shold be name of column photo table
    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}
