<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    protected $fillable = ['file'];

    protected $directory = "/images/";

    public function getFileAttribute($value){

    	return $this->directory . $value;

    }
}
