<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable=['name','description', 'slug' , 'status'];


    // public function setSlugAttribute($request)
    // {
    // 	$this->slug =str_slug($request->name , '-');
    // }
}
