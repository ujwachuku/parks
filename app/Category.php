<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyname()
    {
    	return 'slug';
    }
    
    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
