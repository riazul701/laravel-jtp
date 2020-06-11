<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $directory = "./images";
    protected $table = 'forms';
    public function getPathAttribute($value) {
        return $this->directory.'/'.$value;
    }
}
