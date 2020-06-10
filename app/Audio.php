<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    // get all the tags from the audio.
    public function tags() {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
