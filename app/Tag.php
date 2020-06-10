<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // get all the posts from the tag.
    public function posts() {
        return $this->morphedByMany('App\Post', 'taggable');
    }

    // get all the audios from the tag.
    public function audios() {
        return $this->morphedByMany('App\Audio', 'taggable');
    }
}
