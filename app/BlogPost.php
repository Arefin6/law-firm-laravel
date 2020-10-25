<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected  $fillable = ['title','description','img','slug','practice_areas_id'];

    public function practice(){
        return $this->belongsTo('App\PracticeAreas');
    }
}
