<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // I could change the tables name but it's going to be the default 'posts'
    protected $table = 'posts';
    // Primary Key, I could change it too
    public $primaryKey = 'id';
    // Timestamps, I could change it too
    public $timestamps = true;
    // Creating a relationship
    public function user() {
        return $this->belongsTo('App\User');
    }
}
