<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //If we want to change "Table Name"
    protected $table = 'posts'; 
  //  If we want to change "Primary key"
    // public $primaryKey = 'post_id'; 
  //  If we want to change "Timestamps" 
    public $timestamps = true;


    public function user(){
      return $this->belongsTo('App\User');
    }
}
