<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $table = "articles";

    protected $fillable = ["title","content","category"];

    public function comments()
    {
    	return $this->hasMany('App\Comments','article', 'id');
    }
}
