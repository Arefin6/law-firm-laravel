<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticeAreas extends Model
{
    
	 protected  $fillable = ['name','description','img','slug'];

	 public function BlogPosts(){
        return $this->hasMany('App\BlogPost');
    }  
	
	
}
